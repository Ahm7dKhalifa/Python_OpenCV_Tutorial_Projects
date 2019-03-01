/*!
 * SSSL: smallest, simpelst script loader
 * version: 1.0.1
 */
(function(){var e=document.getElementsByTagName("script")[0],t=e.parentNode,n=/ded|co/,r="onload",i="onreadystatechange",s="readyState",o=function(o,u){var a=document.createElement("script");a[r]=a[i]=function(){if(!this[s]||n.test(this[s])){a[r]=a[i]=null;u&&u(a);a=null}};a.async=true;a.src=o;t.insertBefore(a,e.nextSibling)};window.sssl=function(e,t){if(typeof e=="string"){o(e,t);return}var n=e.shift();o(n,function(){if(e.length){window.sssl(e,t)}else{t&&t()}})}})();
(function(){
    var request_list = [

       '//forms.ontraport.com/v2.4/include/minify/?g=genjs-v3',
              '//app.ontraport.com/js/formeditor/moonrayform/paymentplandisplay/moonrayform.paymentplandisplay.js'
   ];


        // HANDLE JQUERY VERSIONING
        var jQueryVersion,
            currentSubVersion,
            jQueryUISrc = 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js' ,
            appendJQueryBool = true;

        // Look to see if we need to add jQuery to the page
        if ( window.jQuery ) {
            // $ can be a property of window, but still be assigned "undefined"
            // therefore, an extra check is made to assure that the property is populated
            if ( typeof window.jQuery === "function" && "fn" in window.jQuery ) {
                window.$ = window.jQuery
            }

            jQueryVersion = jQuery.fn.jquery.split( "." );

            // The grid requires between jQuery version 1.7.0 and 1.8.1
            if ( jQueryVersion[0] === "1" ) {
               // Strip off the first version so we can actually compare the float values
               currentSubVersion = parseFloat( jQueryVersion[1] + "." + jQueryVersion[2] );

                if ( /* Min version: 1.7.0 */ 7.0 <= currentSubVersion
                            && /* Max version: 1.8.1 */ 8.1 >= currentSubVersion ) {
                    appendJQueryBool = false;
                }
            }
        }
        // END HANDLING JQUERY VERSIONING


        // if we have to append jquery, reattach jqui
        if ( appendJQueryBool ) {
            request_list.unshift( jQueryUISrc );
            request_list.unshift( 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js' );
        } else if ( appendJQueryBool == false && !jQuery.ui ) {
            request_list.unshift( jQueryUISrc );
        }


    sssl(request_list, function(){
    var html = '';
            html = "<link rel=\"stylesheet\" href=\"//app.ontraport.com/js/formeditor/moonrayform/paymentplandisplay/production.css\" type=\"text/css\" /><link rel=\"stylesheet\" href=\"https://forms.ontraport.com/formeditor/formeditor/css/form.default.css\" type=\"text/css\" /><link rel=\"stylesheet\" href=\"https://forms.ontraport.com/formeditor/formeditor/css/form.publish.css\" type=\"text/css\" /><link rel=\"stylesheet\" href=\"https://forms.ontraport.com/v2.4/include/minify/?g=moonrayCSS\" type=\"text/css\" /><link rel=\"stylesheet\" href=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css\" type=\"text/css\" /><link rel=\"stylesheet\" href=\"https://forms.ontraport.com/v2.4/include/formEditor/gencss.php?uid=p2c135232f8\" type=\"text/css\" /><script type=\"text/javascript\" src=\"https://forms.ontraport.com/v2.4/include/formEditor/genjs-v3.php?html=false&uid=p2c135232f8\"></script><div class=\"moonray-form-p2c135232f8 ussr\"><div class=\"moonray-form moonray-form-label-pos-stacked\">\n<form class=\"moonray-form-clearfix\" action=\"https://forms.ontraport.com/v2.4/form_processor.php?\" method=\"post\" accept-charset=\"UTF-8\">\n<div class=\"moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email\"><label for=\"mr-field-element-197195772779\" class=\"moonray-form-label\">Email</label><input name=\"email\" type=\"email\" class=\"moonray-form-input\" id=\"mr-field-element-197195772779\" required value=\"\" placeholder/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-element-html\"><div id=\"mr-field-element-838204168962\" class=\" moonray-form-element-html\"><script src=\"//widget.wickedreports.com/ForexBoat/trackfu.js\"></script>\n</div></div>\n<div class=\"moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-submit\"><input type=\"submit\" name=\"submit-button\" value=\"Submit\" class=\"moonray-form-input\" id=\"mr-field-element-956340392273\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"afft_\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"aff_\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"sess_\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"ref_\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"own_\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"oprid\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"contact_id\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"utm_source\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"utm_medium\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"utm_term\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"utm_content\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"utm_campaign\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"referral_page\" type=\"hidden\" value=\"\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"uid\" type=\"hidden\" value=\"p2c135232f8\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"uniquep2c135232f8\" type=\"hidden\" value=\"0\"/></div>\n<div class=\"moonray-form-element-wrapper moonray-form-input-type-hidden\"><input name=\"mopsbbk\" type=\"hidden\" value=\"64DE255F04B39CC861E4E4C5:B57450C51F6B0D966FCA9097\"/></div>\n</form></div></div>".replace(/<script\b[^>]*>(.*?)<\/script>/,'');
            
        $('span.moon-ray-form-placeholder-326').append( html );
jQuery('.moonray-form-p2c135232f8 form').moonraySmartForm()
			
			.formConditions({
				processorMutator: function( condition, rulesResult ){
					if( rulesResult && condition['tru'] != undefined ){
				    	this._processOutcomes( condition['tru'], true );
					//this should work for all cart / payment related conditions
				    }else if( rulesResult == false && condition['fal'] != undefined ){
				    	this._processOutcomes( condition['fal'], false);
				    	//just invert
				    }else if(rulesResult == false){
				    	this._processOutcomes( condition['tru'], false);
				    }
				},
				outcomeActionMutator: function( outcome, rulesResult ){
					var ret = outcome.action;
					//invert only if its a show
					if( rulesResult === false ){
						//if its a string filp the result. tax and shipping rules sets are funcs
						if( $.type( outcome.action ) == 'string' ){
							if( outcome.action == 'show'){
								ret = 'hide';
							}else{
								ret = null;
							}	
						}
						
					}
					
					return ret;
				},
				inputEvent: 'blur change',
				conditions: []
			})
			.validator({
			errorClass: 'moonray-form-state-error',
			messageClass: 'moonray-form-error-message moonray-form-state-error',
			offset: [ 0, 13 ],
			position: 'top right',
			errorInputEvent: 'blur',
			inputEvent: 'blur',
			effect: 'ontraport-default'
		})
		        var ssslEvent = document.createEvent( 'Event' );
        ssslEvent.initEvent( 'ssslReady', true, true );
        document.dispatchEvent( ssslEvent );
    })
})();
