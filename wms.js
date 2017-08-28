define(["FlashMode","IFrameMode","lobbyService"],function(FlashMode,IFrameMode,lobbyService){
	var wmsController = {},wmsGame={};
	
	wmsController.loadVendorGame = function(inputData){
		lobbyService.getGameMasterData(inputData,this.onMetaDataSucess,this.onMetaDataFail);
	}

	wmsController.onMetaDataSucess = function(metaData,inputData){
		if((metaData.commtype !== undefined)&&(metaData.commtype == "VendorGameOnFlash")){
			wmsGame = new FlashMode();
		}else if((metaData.commtype !== undefined)&&(metaData.commtype == "VendorGameOnIFrame")){
			wmsGame = new IFrameMode();
			setTimeout(function(){wmsGame.gameLoadingStarted();},5000);
			wmsGame.requestFromGame = function(event){
				if((event.data !== undefined) && (this.targetOrigin == (event.origin || event.originalEvent.origin))){
					if(event.data.event == "gameLoaded"){
						this.gameLoadingStarted();
						this.gameLoadingEnded();
					}else if(event.data.event == "gameStarted"){
						this.gameRoundStarted();
					}else if(event.data.event == "gameCompleted"){
						this.gameRoundEnded();
					}else if(event.data.event == "closeGame"){
						this.notifyCloseContainer();
					}
				}
			}
		}
		wmsGame.loadVendorGame(inputData);
	}

	wmsController.notifyGame = function(event,isFromGame){
		if(wmsGame !== undefined && wmsGame.notifyGame !==undefined){
			wmsGame.notifyGame(event,isFromGame);
		}
	}	

	return wmsController;
});