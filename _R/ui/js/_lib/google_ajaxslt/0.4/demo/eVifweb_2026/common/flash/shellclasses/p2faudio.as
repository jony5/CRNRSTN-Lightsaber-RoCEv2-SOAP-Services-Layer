/* Audio Mech  */
DVTdeltaAlpha = 0;
revBuffer="off";
vidHandleIndex=0;
videoFadeTrans=.3;
audiocycle=500;
//_global.numA = Number(_root.mi_p2fMetaObj.numberframes._value);
// called by parent on load

function initializeAudio_global() {
	_global.a_position = new Number();
	_global.a_duration = new Number();
	_global.a_percentComplete = new Number();
	_global.a_percentRemaining = new Number();
	_global.audioLocation;
	_global.pauseTime = 0;
	trace("tag: initializeAudio_global");
}

function resetAudio_local() {
	a_position = 0;
	a_duration = 0;
	a_percentComplete = 0;
	a_percentRemaining = 100;
	audioLocation = 0;
	pauseTime = 0;
	trace("tag: initializeAudio_local");
}

function playNextAudio(audioNum) {
	delete myAudio_sound;
	//trace("MY deleted audio: "+myAudio_sound);
	if (audioNum>Number(_root.mi_p2fMetaObj.numberframes._value)) {
		trace("tag: ===>>> AT THE END OF DVT: restart command sent from audioShell <<<===");
		END_DVT();
	} else {
		trace("tag: advancing audio index in audioShell: " +audioNum);
		audioNum = Number(audioNum)+1;
		trace("tag: loading next audiofile: "+_root.mi_p2fvideoframesObj[audioNum].audioframeurl._value); 
		myAudio_sound = new Sound();
		audioContent =_root.mi_p2fvideoframesObj[audioNum].audioframeurl._value;
		myAudio_sound.loadSound(audioContent, true);
			 
		trace("tag: incrementing master index to match audio index ");
		trace("PING: "+ masterIndex);
		masterIndex = audioNum;
		trace("PING: "+ masterIndex);
		trace("tag: playNextAudio request complete");
		// increment masterInt
		getDescript(Number(Number(masterIndex)+1));
	}
}

function playPrevAudio(audioNum) {
	delete myAudio_sound;
	trace("tag: rewind audio one frame.  Current audio: "+_root.mi_p2fvideoframesObj[audioNum].audioframeurl._value);
	audioNum = Number(audioNum)-1;
	
	//restart presentation if at the beginning
	// if(_root.slideMode_array[masterIndex]=="0" || slideMode_array[masterIndex] == ""){
		//myAudio_sound = new Sound();
		//audioContent =_root.mi_p2fvideoframesObj[audioNum].audioframeurl._value;
		//myAudio_sound.loadSound(audioContent, true);
	//}
	
	masterIndex = audioNum;
	temp = 1+rev_shiftCtrl;
	updateImages(temp);
	playPrevPanel(rev_shiftCtrl);
	revBuffer = "on";
	_root.audioShell_mc.gotoAndPlay(1);
	gotoAndPlay(1);
}

function stopAudio(audioNum) {
	trace("tag: stopAudio");
	myAudio_sound.stop();
	masterIndex = 0;
	resetVideo();
}

function pauseAudio(audioNum) {
	trace("pauseAudio");
	audioPauseLocation = a_position;
	myAudio_sound.stop();
	trace("AUDIO paused at: "+audioPauseLocation);
}

function playAudio(VideoMode, audioNum) {
	trace("tag: playAudio: "+VideoMode);
	if (VideoMode == "from_pause") {
		audioContent =_root.mi_p2fvideoframesObj[audioNum].audioframeurl._value;
		myAudio_sound.start(audioPauseLocation);
		trace("AUDIO picks up at: "+audioPauseLocation);
		vidMode = "play";
	} else {
		if (VideoMode == "from_stop") {
			delete myAudio_sound;
			trace("MY deleted audio: "+myAudio_sound);
			myAudio_sound = new Sound();
			audioContent = _root.mi_p2fvideoframesObj[audioNum].audioframeurl._value;
			myAudio_sound.loadSound(audioContent, true);
			trace("Audio Call ignored");
		} else {
			if (VideoMode == "initialize") {
				delete myAudio_sound;
				trace("MY deleted audio: "+myAudio_sound);
				myAudio_sound = new Sound();
				audioContent =_root.mi_p2fvideoframesObj[audioNum].audioframeurl._value;
				myAudio_sound.loadSound(audioContent, false);
			}
		}
	}
}

function pingAudio(){
	trace("==> a_secsRemaining: "+a_secsRemaining);
	trace("==> videoFadeTrans: "+videoFadeTrans);
	if (myAudio_sound.duration<>undefined && vidMode == "play") {
		// make call to initialize image variables
		//_root.startMotion = "true";
		if(Number(a_secsRemaining)>Number(videoFadeTrans)){
			theContent._alpha = 100;		
		}
	
		// micro progress monitor  SECONDS
		a_duration = (myAudio_sound.duration/1000);
		a_position = (myAudio_sound.position/1000);
		audioRate = Number(playMODE);
	
		// derived elements
		a_percentComplete = (a_position/a_duration);
		a_percentRemaining = 1-(a_position/a_duration);
		a_secsRemaining = a_duration-a_position;
		//trace("a_percentComplete: "+a_percentComplete);
		if(a_position>.1 && audioRate==0){
			revBuffer = "off";
		}
	
		if (audioRate<>0 && vidMode == "play") {
			// rewind button pressed and buffered on any frame but the first[0]
			if (masterIndex>0 && (a_percentRemaining*100)>98 && audioRate<0 && revBuffer <> "on") {
				//trace("STATUS: REWIND TO PREVIOUS PANEL[audioshell]");
				trace("Will not work if undefined: "+theContent);
				switch(theContent){
					case _level0.videoShell_mc.panel0_mc:
					rev_shiftCtrl = 0;
					break;
					case _level0.videoShell_mc.panel1_mc:
					rev_shiftCtrl = 1;
					break;
					case _level0.videoShell_mc.panel2_mc:
					rev_shiftCtrl = 2;
					break
					case _level0.videoShell_mc.panel3_mc:
					rev_shiftCtrl = 3;
					break;
				}
	
				shiftCtrl = masterIndex - 1;
				for (tmpNum=numA; tmpNum>=0; tmpNum--) {
					if ((shiftCtrl-5)>(-1)) {
						shiftCtrl = shiftCtrl-4;
					} else {
						tmpNum = -7;
					}
				}
				trace("STATUS: target "+shiftCtrl)
				trace("STATUS: m_index "+masterIndex);
				trace("STATUS: current panelMC "+theContent);
	
				trace("ACTIVE PANEL: "+theContent);
				updateImages(shiftCtrl);
				// ***********=========== THE REVERSE COMMAND ==========***************
				playPrevAudio(masterIndex);
	
			} else {
				if (audioRate>=0 && masterIndex<>0 && (a_percentRemaining*100)>98) {
				} else {
					trace("===== AUDIO STARTED======");
					myAudio_sound.start(a_position+audioRate);
				}
			}
		}
	
		trace("Begin frame transition when: "+videoFadeTrans+" > "+ a_secsRemaining+" vidmode= "+vidMode);
		//   ================= FADE TRANSITION ENGINE ========================
		if (Number(a_secsRemaining)<Number(videoFadeTrans) && Number(a_percentComplete)>.50 && vidMode == "play") {
			audiocycle=50;
			trace("STATUS: Begin ALPHA FADE OUT");
			if(Number(masterIndex)+1>=Number(_root.mi_p2fMetaObj.numberframes._value)){
				trace("IM AT THE END BIAATCHH.");
				END_DVT();
			}else{
				trace("vidHandleIndex: "+vidHandleIndex);
				currentPanelNum = Number(_root.mi_p2fMetaObj.numberframes._value)-Number(vidHandleIndex);
				DVTdeltaAlpha++;
				//trace("alpha count: "+DVTdeltaAlpha++);
				theContent._alpha = 100-((DVTdeltaAlpha/(Number(fRate)*Number(videoFadeTrans)))*100);
		
				if ((DVTdeltaAlpha/(Number(fRate)*Number(videoFadeTrans)))*100>100) {
				//trace("=========================================index and audio array length");
				//trace("====INDEX: "+masterIndex+" > > length: "+_root.mi_p2fMetaObj.numberframes._value);
	
					if(Number(masterIndex)+1>=Number(_root.mi_p2fMetaObj.numberframes._value)){
						trace("IM AT THE END BIAATCHH.");
						END_DVT();
						
					}else{
					playNextAudio(masterIndex);
					//initializeAudio_global();
					 resetAudio_local(); // may save memory
					vidHandleIndex = Number(vidHandleIndex)-1;
					// send shiftCtrl to run video window
					shiftCtrl = masterIndex;
	
					for (tmpNum=Number(_root.mi_p2fMetaObj.numberframes._value); tmpNum>=0; tmpNum--) {
						if ((shiftCtrl-5)>(-1)) {
							shiftCtrl = shiftCtrl-4;
						} else {
							tmpNum = -7;
						}
					}
	
					//trace("ACTIVE PANEL: "+theContent);
					updateImages(shiftCtrl);
					layerShiftForward(shiftCtrl);
//					gotoAndPlay(1);
//					gotoAndPlay(2);
					// to reset video vars
					}
				}
			}
		}
	}	
}

//
// setup variable audio interval ping 1000, 500, 250
audioIntervalHandle = setInterval(pingAudio, audiocycle);
