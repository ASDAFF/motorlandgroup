{"version":3,"file":"script.min.js","sources":["script.js"],"names":["window","BX","repo","entityId","text","form","list","comments","commentExemplarId","makeId","ENTITY_XMIL_ID","ID","setText","type","isNotEmptyString","res","localStorage","get","set","getText","addCustomEvent","BXMobileApp","isArray","inner","keyBoardIsShown","mention","appendToForm","fd","key","val","ii","hasOwnProperty","append","app","exec","id","node","join","removeClass","commentObj","attachments","this","mentions","prototype","getInstance","___id","removeInstance","comment","MPFForm","bindEvents","handlerId","entitiesId","handler","handlerEvents","onMPFUserIsWriting","delegate","writing","onMPFHasBeenDestroyed","reboot","visible","bindHandler","jsCommentId","util","getRandomString","removeCustomEvent","closeWait","onCustomEvent","windowEvents","OnUCUserReply","authorId","authorName","parseInt","initComment","simpleForm","writingParams","show","OnUCAfterRecordEdit","data","act","showError","showNote","oldObj","newObj","linkEntity","_linkEntity","f","proxy","str","reinitComment","init","UI","Page","TextPanel","submitClear","submitStart","submit","c","entityHdl","post_data","getForm","ENTITY_XML_ID","REVIEW_TEXT","NOREDIRECT","MODE","AJAX_POST","sessid","bitrix_sessid","SITE_ID","message","LANGUAGE_ID","post","MobileAjaxWrapper","FormData","ij","length","Wrap","method","url","processData","start","preparePost","callback","callback_failure","xhr","send","addClass","bind","e","unbindAll","handleAppData","showWait","hide","link","mobileShowActions","event","isKeyboardShown","enableInVersion","platform","BXMobileAppContext","target","tagName","toUpperCase","getAttribute","eventCancelBubble","PreventDefault","menu","action","push","title","reply","like","RatingLikeComments","getById","vote","voted","List","hidden","replace","oMSL","createTask","entityType","ActionSheet","buttons","mobileReply","mobileExpand","el2","previousSibling","el","parentNode","fxStart","fxFinish","offsetHeight","start1","height","finish1","remove","time","style","maxHeight","overflow","duration","finish","transition","easing","makeEaseOut","transitions","quart","step","state","opacity","complete","cssText","LazyLoad","showImages","animate","MPL","params","staticParams","formParams","superclass","constructor","apply","arguments","template","thumb","thumbForFile","postCounter","ENTITY_ID","obj","makeThumb","pullNewRecords","add","clearThumb","command","exemplarId","in_array","pullNewRecord","pullNewAuthor","extend","txt","container","isString","htmlspecialchars","html","fcParseTemplate","messageFields","FULL_ID","POST_MESSAGE_TEXT","POST_TIMESTAMP","Date","getTime","DATE_TIME_FORMAT","RIGHTS","rights","ob","processHTML","create","attrs","className","HTML","appendChild","curPos","pos","size","GetWindowInnerSize","top","innerHeight","GetWindowScrollPos","scrollTo","scroll","scrollHeight","scrollTop","display","cnt","func","childNodes","ajax","processScripts","SCRIPT","defer","newId","setAttribute","setTimeout","BitrixMobile","nav","build","createInstance","entity_xml_id"],"mappings":"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"}