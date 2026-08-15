//
// sequence and slider functions
//
// set up some basic vars for the phone sequence and slider
function mi_initSequenceVars(featureClipObj) {
	//
	// create an array that contains all the feature frame numbers
	mi_applicationRoot.mi_sequence.mi_sequenceArray = featureClipObj.featureframes._value.split(",");
	mi_applicationRoot.mi_sequence.mi_numFeatureFrames = Number(featureClipObj.numfeatureframes._value);
	mi_applicationRoot.mi_sequence.mi_phoneSequenceClip = mi_applicationRoot.mi_sequence[mi_currentItem.label];
	
	//
	// added for reflections
	mi_applicationRoot.mi_reflection.mi_phoneSequenceClip = mi_applicationRoot.mi_reflection[mi_currentItem.label];
	//
	// set up a var that tells where the bulk of the sequence is, past the intro animation
	mi_applicationRoot.mi_sequence.mi_startFrame = Number(featureClipObj.featureframes.startframe);
	mi_applicationRoot.mi_sequence.mi_currentFrame = mi_applicationRoot.mi_sequence.mi_startFrame;
	//
	// boolean used to switch control of the sequence between the slider and the feature list
	mi_phoneSliding = false;
}
function mi_initSliderComponent() {
	//
	// this is a hack. by decalring a root level point to the feature list object,
	// i may be painting myself into a corner for later RLPS that need more than one item
	mi_initSlider(mi_currentFeatureListObj);
}
//
// takes the already loaded slider, which starts off being hidden, and initializes it
function mi_initSlider(featureClipObj) {
	//
	// sets the current slider clip var to point to the slider
	mi_sliderClip = mi_applicationRoot.mi_slider[mi_currentItem.label];
	mi_addFeatureMarks(featureClipObj);
	mi_addTransition("fade", mi_sliderClip, mi_sliderClip._alpha, 100, 1, true);
	//
	// set up basic slider functionalities
	mi_sliderClip.btn_sliderBar.btn.onPress = mi_sliderBarPress;
	mi_sliderClip.btn_sliderBar.btn.onRelease = mi_sliderBarRelease;
	mi_sliderClip.btn_sliderBar.btn.onReleaseOutside = mi_sliderBarRelease;
}
//
// add marks to the slider so that the user knows there is a feature associated
function mi_addFeatureMarks(featureClipObj) {
	var trackWidth = mi_sliderClip.mc_sliderTrack._width-mi_sliderClip.btn_sliderBar._width;
	var ratio = trackWidth/(mi_applicationRoot.mi_sequence.mi_numFeatureFrames-1);
	for (var i = 0; i<mi_applicationRoot.mi_sequence.mi_sequenceArray.length; ++i) {
		var marker = mi_sliderClip.mc_featureFrameMark.duplicateMovieClip("featureMark"+i, i);
		var offset = (mi_sliderClip.btn_sliderBar._width-marker._width)/2;
		var targetX = (Number(mi_applicationRoot.mi_sequence.mi_sequenceArray[i])-mi_applicationRoot.mi_sequence.mi_startFrame)*ratio;
		marker._x = targetX+offset;
	}
	mi_sliderClip.btn_sliderBar.swapDepths(i);
	mi_sliderClip.mc_featureFrameMark._visible = false;
}
//
// this moves the slider, so that when a feature list is rolled over, the slider moves with it
function mi_moveSlider(frameNum) {
	//
	// determine where on the slider bar track the slider button should move to
	var trackWidth = mi_sliderClip.mc_sliderTrack._width-mi_sliderClip.btn_sliderBar._width;
	var ratio = trackWidth/(mi_applicationRoot.mi_sequence.mi_numFeatureFrames-1);
	var targetX = (frameNum-mi_applicationRoot.mi_sequence.mi_startFrame)*ratio;
	mi_sliderClip.btn_sliderBar.mi_tweenClip("_x", mi_easeOut, mi_sliderClip.btn_sliderBar._x, targetX, 45, false);
}
//
// when the slider button is pressed
function mi_sliderBarPress() {
	//
	// stop other objects from moving that might interfere with the dragging of the slider button
	mi_removePulseListener(mi_sliderClip.btn_sliderBar);
	mi_removePulseListener(mi_applicationRoot.mi_sequence);
	mi_sliderClip.btn_sliderBar.startDrag(false, 0, 0, mi_sliderClip.mc_sliderTrack._width-mi_sliderClip.btn_sliderBar._width, 0);
	//
	// start an onEnterFrame event to update the phone seiqnce and features while the slider button is being dragged
	mi_sliderClip.btn_sliderBar.mi_pulseUpdate = mi_updatePhoneAndFeatures;
	mi_addPulseListener(mi_sliderClip.btn_sliderBar);
	//
	// make sure to let the feature list know that the slider now has control
	mi_phoneSliding = true;
}
//
// when the slider button is being dragged continually update the phone and feature list
function mi_updatePhoneAndFeatures() {
	//
	// determine what frame in the sequence to go to
	var trackWidth = mi_sliderClip.mc_sliderTrack._width-mi_sliderClip.btn_sliderBar._width;
	var ratio = trackWidth/(mi_applicationRoot.mi_sequence.mi_numFeatureFrames-1);
	var frameToHit = Math.round(this._x/ratio)+mi_applicationRoot.mi_sequence.mi_startFrame;
	//
	// update the internal vars
	mi_applicationRoot.mi_sequence.mi_currentFrame = frameToHit;
	mi_applicationRoot.mi_sequence.mi_phoneSequenceClip.gotoAndStop(frameToHit);
	//
	// reflection
	mi_applicationRoot.mi_reflection.mi_phoneSequenceClip.gotoAndStop(mi_applicationRoot.mi_sequence.mi_phoneSequenceClip._currentframe);
	//
	// now chack and see if the slider has hit a frame that is associated with a feature list item
	var featureHit = mi_checkForFeatureFrame(frameToHit);
	if (featureHit != null) {
		//
		// if so, show that feature list item
		mi_showFeatureListItems(mi_featureListClip, mi_featureListClip["featureItem"+featureHit]);
	} else {
		//
		// if not, contract all feature list items
		mi_hideFeatureListItems(mi_featureListClip, null);
	}
}
//
// when the slider button is released
function mi_sliderBarRelease() {
	mi_sliderClip.btn_sliderBar.stopDrag();
	mi_removePulseListener(mi_sliderClip.btn_sliderBar);
	//
	// make sure and give control back to the feature list
	mi_phoneSliding = false;
}
//
// sets up an onEnterFrame event to move between the sequences current frame and its target frame
function mi_animateSequence(id) {
	//
	// remove any old onEnterFrame events
	mi_removePulseListener(mi_applicationRoot.mi_sequence);
	//
	// if the function is passed a null value, it will animate back to the first frame in the sequence
	if (id == null) {
		mi_applicationRoot.mi_sequence.mi_targetFrame = mi_applicationRoot.mi_sequence.mi_startFrame;
	} else {
		//
		// else move to the appropriate tagrte frame associated with the current feature
		mi_applicationRoot.mi_sequence.mi_targetFrame = Number(mi_applicationRoot.mi_sequence.mi_sequenceArray[id]);
	}
	mi_applicationRoot.mi_sequence.mi_pulseUpdate = mi_sequenceMover;
	mi_addPulseListener(mi_applicationRoot.mi_sequence);
}
//
// helper function to move the sequnce from frame to frame
function mi_sequenceMover() {
	//
	// determine what direction to move, left or right through frames
	var dir = (this.mi_currentFrame<this.mi_targetFrame)-(this.mi_currentFrame>this.mi_targetFrame);
	//
	// if the number of frames between the current frame and the target are more than 1,
	// use the "blurred" frames instead so that there is the experience of motion
	var frameOffset = 0;
	if (Math.abs(this.mi_currentFrame-this.mi_targetFrame)>1) {
		//
		// disabled due to optimization
		//frameOffset = this.mi_numFeatureFrames;
	}
	//   
	// the number '2' below was added so that the animations moved more slowly (1/2 the speed)
	// the only numbers that work here are whole numbers. adding a 3 will slow it down even more.
	// but there is no slowing it down between 1 and 2. try it, you'll see
	this.mi_currentFrame = this.mi_currentFrame+(dir);
	this.mi_phoneSequenceClip.gotoAndStop(int(this.mi_currentFrame+frameOffset));
	//
	// added to move reflection clip to same frame
	mi_applicationRoot.mi_reflection.mi_phoneSequenceClip.gotoAndStop(this.mi_phoneSequenceClip._currentframe);
	//
	//
	if (this.mi_currentFrame == this.mi_targetFrame) {
		mi_removePulseListener(this);
	}
}
//
// iterate through the sequence array and see if the current translated frame number matches any 
function mi_checkForFeatureFrame(frameNum) {
	for (var i = 0; i<mi_applicationRoot.mi_sequence.mi_sequenceArray.length; ++i) {
		if (frameNum == Number(mi_applicationRoot.mi_sequence.mi_sequenceArray[i])) {
			//
			// if there is a match, return that index
			return i;
		}
	}
	return null;
}
