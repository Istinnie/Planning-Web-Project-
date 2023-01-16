/*! 27.0.1.0 */
/*! VersionVI: 01F270103n   */
var WDVideo=function(){function n(n,t,r,u,f){if(arguments.length){WDChamp.prototype.constructor.apply(this,arguments);var e=f[0];this.m_oParamVideoInitial=e;this.m_oPlayer=new i(this)}}function wt(n){if(f===n.ePlayerDefaut)return f;if(undefined!==n.m_tabVideos||undefined!==n.m_tabSousTitres&&0<n.m_tabSousTitres.length)return t;switch(n.eType){case it:if(w(n))return t;case nt:if(kt())return v;n.ePlayerDefaut;break;case tt:if(w(n))return t;case rt:return dt()?y:n.ePlayerDefaut;case ut:return ni(n)?t:n.ePlayerDefaut;case ft:case et:case ot:default:return n.ePlayerDefaut;case st:return t;case ht:return f}}function bt(n,i,r){switch(i){case v:return bIEAvec11?new l(n,r):bWK?new ct(n,r):new lt(n,r);case y:return new at(n,r);case t:return new o(n,r);default:case d:case g:return new pt(n,r);case c:return new vt(n,r);case f:return new yt(n,r)}}function p(n){return!clWDUtil.bForEach(navigator.plugins||[],function(t){return 0<=t.name.indexOf(n)?!1:!0})}function kt(){return bIEAvec11||p("Windows Media")}function dt(){return p("QuickTime")||gt()}function gt(){try{var n=new ActiveXObject("QuickTimeCheckObject.QuickTimeCheck.1");if(n&&n.IsQuickTimeAvailable(0))return!0}catch(t){}return!1}function w(n){return n.ePlayerDefaut===t||!bIE||10<=nIE&&!bIEQuirks}function ni(n){return n.ePlayerDefaut===t||!bIE}var r=1,s=2,h=3,a=0,b=1,k=2,d=0,v=1,y=4,t=5,g=6,c=7,f=8,nt=0,tt=2,it=3,rt=4,ut=5,ft=6,et=7,ot=8,st=9,ht=10,e=function(){function n(n,i){i&&(this.m_oChampVideo=n,this.m_tabFichiers=t(i),this.m_tabSousTitres=i.m_tabSousTitres,this.m_sImage=i.sImage,this.m_sLibelle=i.sLibelle,this.m_bPleinEcran=i.bPleinEcran,this.m_bBoucle=i.bBoucle,this.m_eControles=i.eControles,this.m_sHTMLDefaut=i.sHTMLDefaut,this.m_bDemarrageAuto=i.bDemarrageAuto)}function t(n){var i,t;return i=undefined!==n.sFichier?[n]:undefined!==n.m_tabVideos?n.m_tabVideos:[],t=[],clWDUtil.bForEach(i,function(n){return t.push({m_sFichier:n.sFichier,m_sTypeMIME:n.m_sTypeMIME}),!0}),t}return n.prototype.vbJoue=function(){return!1},n.prototype.vbPause=function(){return!1},n.prototype.vbArret=function(){return!1},n.prototype.vnGetEtat=function(){return r},n.prototype.vbVaDebut=function(){return this.vbSetPosition(0)},n.prototype.vbVaFin=function(){return this.vbSetPosition(this.vnGetDuree())},n.prototype.vnGetPosition=function(){return 0},n.prototype.vbSetPosition=function(){return!1},n.prototype.vnGetDuree=function(){return 0},n.prototype.vnGetHauteur=function(){return 0},n.prototype.vnGetLargeur=function(){return 0},n.prototype.vnGetVolume=function(){return 100},n.prototype.vbSetVolume=function(){return!1},n.prototype._sGetFichier=function(n){return this.m_tabFichiers[n].m_sFichier},n}(),i=function(){function n(n){n&&(e.prototype.constructor.apply(this,arguments),this.m_oObjet=null)}function t(n){return'name="'+n+'" width="100%" height="100%" '}return n.prototype=new e,n.prototype.constructor=n,n.prototype.vConstruitPlayer=function(n,t){n.innerHTML=this._vsGetPlayerHTML(n);this.m_oObjet=this.m_oChampVideo.oGetObjectEmbed(this.m_oChampVideo.m_sAliasChamp,t,!0)},n.prototype._sGetEmbed=function(){return"<embed "+t(this.m_oChampVideo.m_sAliasChamp)+this._vsGetAttributsEmbed()+" "+this._vsGetParamsEmbed()+"><\/embed>"},n.prototype._vsGetPlayerHTML=function(){var n=this.m_oChampVideo.m_sAliasChamp;return'<object id="'+n+'" '+t(n)+this._vsGetAttributsObject()+">"+this._vsGetParamsObject()+this._sGetEmbed()+"<\/object>"},n.prototype._vsGetAttributsObject=function(){return""},n.prototype._vsGetParamsObject=function(){return""},n.prototype._vsGetAttributsEmbed=function(){return""},n.prototype._vsGetParamsEmbed=function(){return""},n.prototype._sGetFichier=function(n){return this.m_tabFichiers[n].m_sFichier},n}(),u=function(){function n(n){n&&i.prototype.constructor.apply(this,arguments)}return n.prototype=new i,n.prototype.constructor=n,n.prototype.vbJoue=function(){return this.m_oObjet.controls.play(),!0},n.prototype.vbPause=function(){return this.m_oObjet.controls.pause(),!0},n.prototype.vbArret=function(){return this.m_oObjet.controls.stop(),!0},n.prototype.vnGetEtat=function(){return this.m_oObjet.playState},n.prototype.vnGetPosition=function(){return Math.floor(this.m_oObjet.controls.currentPosition*1e3)},n.prototype.vbSetPosition=function(n){return this.m_oObjet.controls.currentPosition=n/1e3,!0},n.prototype.vnGetDuree=function(){return this.m_oObjet.controls.currentItem.duration*1e3},n.prototype.vnGetHauteur=function(){return this.m_oObjet.controls.currentItem.imageSourceHeight},n.prototype.vnGetLargeur=function(){return this.m_oObjet.controls.currentItem.imageSourceWidth},n.prototype.vnGetVolume=function(){return this.m_oObjet.settings.volume},n.prototype.vbSetVolume=function(n){return this.m_oObjet.settings.volume=n,!0},n.prototype._sGetUiMode=function(){switch(this.m_eControles){case a:return"none";default:case b:return"mini";case k:return"full"}},n}(),l=function(){function n(n){n&&u.prototype.constructor.apply(this,arguments)}return n.prototype=new u,n.prototype.constructor=n,n.prototype._vsGetAttributsObject=function(){return'CLASSID="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" type="application/x-oleobject" '},n.prototype._vsGetParamsObject=function(){return'<param name="url" value="'+this._sGetFichier(0)+'"><param name="AutoStart" value="false"><param name="uiMode" value="'+this._sGetUiMode()+'">'+(this.m_bBoucle?'<param name="playCount" value="1000">':"")},n.prototype._vsGetAttributsEmbed=function(){return'type="application/x-mplayer2" pluginspage="http://microsoft.com/windows/mediaplayer/en/download/" '},n.prototype._vsGetParamsEmbed=function(){return'uiMode="'+this._sGetUiMode()+'" src="'+this._sGetFichier(0)+'" autostart="false" '+(this.m_bBoucle?'playCount="1000" ':"")},n}(),ct=function(){function n(n){n&&l.prototype.constructor.apply(this,arguments)}return n.prototype=new l,n.prototype.constructor=n,n}(),lt=function(){function n(n){n&&u.prototype.constructor.apply(this,arguments)}return n.prototype=new u,n.prototype.constructor=n,n.prototype.vConstruitPlayer=function(n){return u.prototype.vConstruitPlayer.apply(this,[n,!0])},n.prototype._vsGetPlayerHTML=function(){return this.m_sHTMLDefaut},n}(),at=function(){function n(n){n&&(i.prototype.constructor.apply(this,arguments),this.m_nEtat=r)}return n.prototype=new i,n.prototype.constructor=n,n.prototype.vbJoue=function(){return this.m_oObjet.Play(),this.m_nEtat=h,!0},n.prototype.vbPause=function(){return this.m_oObjet.Stop(),this.m_nEtat=s,!0},n.prototype.vbArret=function(){return this.m_oObjet.Stop(),this.m_oObjet.Rewind(),this.m_nEtat=r,!0},n.prototype.vnGetEtat=function(){return this.m_nEtat},n.prototype.vnGetPosition=function(){return this.__nUnitToMs(this.m_oObjet.GetTime())},n.prototype.vbSetPosition=function(n){return this.m_oObjet.SetTime(this.__nMsToUnit(n)),!0},n.prototype.vnGetDuree=function(){return this.__nUnitToMs(this.m_oObjet.GetDuration())},n.prototype.vnGetHauteur=function(){return this.__nGetDimension(!0)},n.prototype.vnGetLargeur=function(){return this.__nGetDimension(!1)},n.prototype.vnGetVolume=function(){return parseInt(this.m_oObjet.GetVolume()*100/255,10)},n.prototype.vbSetVolume=function(n){return this.m_oObjet.SetVolume(n*255/100),!0},n.prototype.__nMsToUnit=function(n){return n/1e3*this.m_oObjet.GetTimeScale()},n.prototype.__nUnitToMs=function(n){return n*1e3/this.m_oObjet.GetTimeScale()},n.prototype.__nGetDimension=function(n){var i=this.m_oObjet.GetRectangle(),t=i.split(",");return parseInt(t[n?3:2],10)-parseInt(t[n?1:0],10)},n.prototype._vsGetPlayerHTML=function(){return this.m_sHTMLDefaut},n}(),o=function(){function n(n){n&&i.prototype.constructor.apply(this,arguments)}return n.prototype=new i,n.prototype.constructor=n,n.prototype.vbJoue=function(){return this.m_oObjet.play(),!0},n.prototype.vbPause=function(){return this.m_oObjet.pause(),!0},n.prototype.vbArret=function(){return this.vbPause(),this.m_oObjet.currentTime=0,this.vbPause(),!0},n.prototype.vnGetEtat=function(){return this.m_oObjet.paused?s:h},n.prototype.vnGetPosition=function(){return Math.round(this.m_oObjet.currentTime*1e3)},n.prototype.vbSetPosition=function(n){return this.m_oObjet.currentTime=n/1e3,!0},n.prototype.vnGetDuree=function(){var n=this.m_oObjet.duration;return isNaN(n)||!isFinite(n)?0:Math.round(n*1e3)},n.prototype.vnGetHauteur=function(){return this.m_oObjet.videoHeight},n.prototype.vnGetLargeur=function(){return this.m_oObjet.videoWidth},n.prototype.vnGetVolume=function(){return Math.round(this.m_oObjet.volume*100)},n.prototype.vbSetVolume=function(n){this.m_oObjet.volume=n/100},n.prototype._vsGetBalise=function(){return"video"},n.prototype._vsGetPlayerHTML=function(n){var i=this._vsGetBalise(),t="<"+i+' preload="metadata" ';return bIEAvec11?t+='style="width:100%;':bWK?(t+='style="width:100%;height:100%;top:50%;left:50%;transform:translate(-50%, -50%);position: absolute;',n.style.position="relative"):t+='width="100%" height="100%',t+='" id="'+this.m_oChampVideo.m_sAliasChamp,this.m_bDemarrageAuto&&(t+='" autoplay="autoplay'),this.m_bBoucle&&(t+='" loop="loop'),this.m_eControles!==a&&(t+='" controls="controls'),t+='">',clWDUtil.bForEach(this.m_tabFichiers,function(n){return t+='<source src="'+n.m_sFichier+'" type="'+n.m_sTypeMIME+'" />',!0}),this.m_tabSousTitres&&clWDUtil.bForEach(this.m_tabSousTitres,function(n){return t+='<track kind="'+n.m_sKind+'" src="'+n.m_sSrc+(undefined!==n.m_sSrclang?'" srclang="'+n.m_sSrclang:"")+(undefined!==n.m_sLabel?'" label="'+n.m_sLabel:"")+(n.m_bDefaut?'" default="default':"")+'" />',!0}),t+="<\/"+i+">"},n.prototype.oJoue=function(){return this.m_oObjet.play()},n.prototype.SetMuet=function(){return this.m_oObjet.muted=!0},n}(),vt=function(){function n(n){n&&o.prototype.constructor.apply(this,arguments)}return n.prototype=new o,n.prototype.constructor=n,n.prototype._vsGetBalise=function(){return"audio"},n}(),yt=function(){function u(n,t){var i=c[n.getPlaybackQuality()];return i?i[t?0:1]:0}function n(n){n&&(e.prototype.constructor.apply(this,arguments),this.m_oPlayer=null)}function l(n,r){t?o(n,r):i.push({m_oVideoYouTube:n,m_oConteneur:r})}function o(n,t){n.ChargementVideo(t)}var c={tiny:[256,144],small:[426,240],medium:[640,360],large:[854,480],hd720:[1280,720],hd1080:[1920,1080],hd1440:[2560,1440],hd2160:[3840,2160],highres:[7680,4320]};n.prototype=new e;n.prototype.constructor=n;n.prototype.vbJoue=function(){return this.m_oPlayer.playVideo(),!0};n.prototype.vbPause=function(){return this.m_oPlayer.pauseVideo(),!0};n.prototype.vbArret=function(){return this.m_oPlayer.stopVideo(),!0};n.prototype.vnGetEtat=function(){switch(this.m_oPlayer.getPlayerState()){case-1:case YT.PlayerState.ENDED:case YT.PlayerState.CUED:default:return r;case YT.PlayerState.PLAYING:case YT.PlayerState.BUFFERING:return h;case YT.PlayerState.PAUSED:return s}};n.prototype.vnGetPosition=function(){return this.m_oPlayer.getCurrentTime()*1e3};n.prototype.vbSetPosition=function(n){return this.m_oPlayer.seekTo(n/1e3,!0),!0};n.prototype.vnGetDuree=function(){return this.m_oPlayer.getDuration()*1e3};n.prototype.vnGetHauteur=function(){return u(this.m_oPlayer,!1)};n.prototype.vnGetLargeur=function(){return u(this.m_oPlayer,!0)};n.prototype.vnGetVolume=function(){return this.m_oPlayer.getVolume()};n.prototype.vbSetVolume=function(n){return this.m_oPlayer.setVolume(n),!0};n.prototype.vConstruitPlayer=function(n){l(this,n);f()};n.prototype.ChargementVideo=function(){this.m_oPlayer=new YT.Player(this.m_oChampVideo.m_sAliasChamp+"_YT",{})};var t=!1,f=function(){function e(){t=!0;clWDUtil.bForEach(i,function(n){return o(n.m_oVideoYouTube,n.m_oConteneur),!0});i=[];n&&n()}var n=null,r,u;f=clWDUtil.m_pfVide;window.YT&&window.YT.Player?e():(n=window.onYouTubeIframeAPIReady,window.onYouTubeIframeAPIReady=e,r=document.createElement("script"),r.src="https://www.youtube.com/iframe_api",u=document.getElementsByTagName("script")[0],u.parentNode.insertBefore(r,u))},i=[];return n}(),pt=function(){function n(n){n&&i.prototype.constructor.apply(this,arguments)}return n.prototype=new i,n.prototype.constructor=n,n.prototype._vsGetPlayerHTML=function(){return this.m_sHTMLDefaut},n}();return n.prototype=new WDChamp,n.prototype.constructor=n,n.prototype.Init=function(){WDChamp.prototype.Init.apply(this,arguments);this.m_oConteneur=document.getElementById("tz"+this.m_sAliasChamp);this.__InitPlayer(this.m_oParamVideoInitial)},n.prototype.sGetVariable=function(n){return this.m_oPlayer[n]},n.prototype.bGetVariable=function(n){return this.m_oPlayer[n]},n.prototype.nGetVariable=function(n){return this.m_oPlayer[n]},n.prototype.bJoue=function(){try{return this.m_oPlayer.vbJoue(arguments)}catch(n){return!1}},n.prototype.bPause=function(){try{return this.m_oPlayer.vbPause()}catch(n){return!1}},n.prototype.bArret=function(){try{return this.m_oPlayer.vbArret()}catch(n){return!1}},n.prototype.nGetEtat=function(){try{return this.m_oPlayer.vnGetEtat()}catch(n){return r}},n.prototype.bDebut=function(){try{return this.m_oPlayer.vbVaDebut()}catch(n){return!1}},n.prototype.bFin=function(){try{return this.m_oPlayer.vbVaFin()}catch(n){return!1}},n.prototype.nGetPosition=function(){try{return this.m_oPlayer.vnGetPosition()}catch(n){return 0}},n.prototype.bSetPosition=function(n){try{return this.m_oPlayer.vbSetPosition(n)}catch(t){return!1}},n.prototype.nGetDuree=function(){try{return this.m_oPlayer.vnGetDuree()}catch(n){return 0}},n.prototype.nGetHauteur=function(){try{return this.m_oPlayer.vnGetHauteur()}catch(n){return 0}},n.prototype.nGetLargeur=function(){try{return this.m_oPlayer.vnGetLargeur()}catch(n){return 0}},n.prototype.nGetVolume=function(){try{return this.m_oPlayer.vnGetVolume()}catch(n){return 100}},n.prototype.bSetVolume=function(n){try{return this.m_oPlayer.vbSetVolume(n)}catch(t){return!1}},n.prototype._vDeduitParam=function(n){WDChamp.prototype._vDeduitParam.apply(this,arguments);this.__InitPlayer(n)},n.prototype.__InitPlayer=function(n){var i=wt(n);t===i&&c===n.ePlayerDefaut&&(i=c);this.m_oPlayer=bt(this,i,n);this.m_oConteneur&&clWDUtil.bEstDisplay(this.m_oConteneur,document,!1)&&this.__InitPlayerInterne()},n.prototype.__InitPlayerInterne=function(){this.m_oPlayer.vConstruitPlayer(this.m_oConteneur,bIEAvec11);this.m_oPlayer.m_bDemarrageAuto&&this.nSetTimeoutUnique("__JoueDemarrageAuto",500)},n.prototype.__JoueDemarrageAuto=function(){var n,t;try{n=this.m_oPlayer;n instanceof o?(t=n.oJoue(),t instanceof Promise&&t.catch(function(){n.SetMuet();n.oJoue()})):n.vbJoue()}catch(i){}},n}()