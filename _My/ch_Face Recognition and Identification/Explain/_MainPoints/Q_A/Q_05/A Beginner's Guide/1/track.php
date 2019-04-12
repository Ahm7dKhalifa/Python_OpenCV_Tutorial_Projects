_mrd.cookie='ref_=mr_2;' + _mr_ex  + ';'+ 'path=/';_mrd.cookie = 't_=mr_2;' + _mr_ex +  ';'+'path=/';var _mrTrackLinks = new Array;

	                    _mrScanLinks();
	                
(function(){
        var triggerCustomEvent = function( element, evName ) {
            var ev, isIE = ( /*@cc_on!@*/false || !!document.documentMode );

            if ( window.CustomEvent && !isIE ) {
                ev = new CustomEvent( evName, {
                    bubbles: true,
                    cancelable: true
                } );
            } else {
                ev = document.createEvent( 'Event' );
                ev.initEvent( evName, true, true );
            }

            element.dispatchEvent( ev );
        };
        
        triggerCustomEvent( document.body, "opTrackingComplete" );
        document.body.setAttribute( "data-op-tracked", true );
         } )();

