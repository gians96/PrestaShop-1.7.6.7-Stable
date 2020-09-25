<?php
/* Smarty version 3.1.33, created on 2020-09-24 18:46:57
  from 'module:culqiviewstemplateshookpa' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6d2ff1b942c9_69681309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd482ebc6d4c40cdd71ba5582a16a33b69b33243c' => 
    array (
      0 => 'module:culqiviewstemplateshookpa',
      1 => 1600990766,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d2ff1b942c9_69681309 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row culqi_payment">
		<style type="text/css">
			.w {
				width: 100%;
			}
			.wc {
				width: 45%;
			}

		</style>
		<link rel="stylesheet" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/css/culqi.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/css/waitMe.min.css" type="text/css" media="all">

		<div class="row" >
			<div class="col-md-3 col-xs-1"></div>
			<div class="col-md-5 col-xs-8">
				<form id="form-payment" >
					<div class="form-group">
						<h6>Correo Electronico</h6>
						<input  name="input-email" id="input-email" data-culqi="card[email]" class="culqi-email w"/>
					</div>
					<div class="form-group">
						<h6>Número Tarjeta</h6>
						<input  name="input-card" id="input-card" data-culqi="card[number]" class="culqi-card w"/>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h6>Mes expiración</h6>
								<input placeholder="MM" maxlength="2" data-culqi="card[exp_month]" class="culqi-expm w"/>
							</div>
							<div class="col-md-6 col-xs-6">
								<h6>Año expiración</h6>
								<input placeholder="AAAA" maxlength="4" data-culqi="card[exp_year]" class="culqi-expy w"/>
							</div>
						</div>
					</div>
					<div class="form-group">
							<h6>CVV</h6>
							<input  name="input-cvc" id="input-cvc" data-culqi="card[cvv]" class="culqi-cvv wc"/>
					</div>

				</form>
				<p class="hide" id="showresult">
					<b id="showresultcontent"></b>
				</p>
			</div>
			<div class="col-md-4 col-xs-9"></div>

		</div>
		<br/>
</div>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://checkout.culqi.com/v2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" defer src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/js/waitMe.min.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>

	$(".culqi-expm").on("input" , function() {
	  this.value = this.value.replace(/[^0-9]/g,'');
	  var expm = $('.culqi-expm').val().length;
	  if ( expm == 1 ) {
			$('.culqi-expm').css({"outline-color": "#ff4c4c",
             								"outline-style":"solid",
														"outline-width":".1875rem"
             								});
	  } else if (expm == 2){
			$('.culqi-expm').css({"outline-color": "white",
														"outline-width":"0"
             								});
		}
	});

	$(".culqi-expy").on("input" , function() {
	  this.value = this.value.replace(/[^0-9]/g,'');
	  var expy = $('.culqi-expy').val().length;
	  if ( expy < 4 ) {
			$('.culqi-expy').css({"outline-color": "#ff4c4c",
             								"outline-style":"solid",
														"outline-width":".1875rem"
             								});
	  } else if (expy == 4) {
			$('.culqi-expy').css({"outline-color": "white",
														"outline-width":"0"
             								});
		}
	});

$(document).ready(function() {
	Culqi.publicKey = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['llave_publica']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
	Culqi.useClasses = true;
	Culqi.init();

	$('#payment-confirmation > .ps-shown-by-js > button').click(function(e) {
		var myPaymentMethodSelected = $('.payment-options').find("input[data-module-name='culqi']").is(':checked');

		if(myPaymentMethodSelected) {
				Culqi.createToken();
				return false;
		}

	});
});

// Process to Pay
function culqi() {
	if(Culqi.token) {
	  $(document).ajaxStart(function(){
	      run_waitMe();
	  });
	  $(document).ajaxComplete(function(){
	      $('body').waitMe('hide');
	  });
	  var installments = (Culqi.token.metadata.installments == undefined) ? 0 : Culqi.token.metadata.installments;
	  $.ajax({
	      url: fnReplace("<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('culqi','chargeajax',array(),true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"),
	      data: {
					ajax: true,
					action: 'displayAjax',
					token_id: Culqi.token.id,
					installments: installments
	      },
	      type: "POST",
	      dataType: 'json',
	      success: function(data) {
						if (data === "Imposible conectar a Culqi API") {
							$('body').waitMe('hide');
							showResult('red',data + ": aumentar el timeout de la consulta");
						} else if(data === "Error de autenticación") {
						  $('body').waitMe('hide');
						  showResult('red',data + ": verificar si su Llave Secreta es la correcta");
						} else {
						  var result = "";
						  if(data.constructor == String) {
						      result = JSON.parse(data);
						  }
						  if(data.constructor == Object) {
						      result = JSON.parse(JSON.stringify(data));
						  }
						  if(result.object === 'charge') {
						    showResult('green',result.outcome.user_message);
								$('#payment-confirmation > .ps-shown-by-js > button').prop("disabled",true);
						    redirect();
						  }
						  if(result.object === 'error') {
						    $('body').waitMe('hide');
						    showResult('red',result.user_message);
						  }
						}
	      }
	  });
	} else {
	  $('body').waitMe('hide');
		if(Culqi.error) {
			showResult('red',Culqi.error.user_message);
		}
	}
}

function run_waitMe() {
	$('body').waitMe({
	  effect: 'orbit',
	  text: 'Procesando pago...',
	  bg: 'rgba(255,255,255,0.7)',
	  color:'#28d2c8'
	});
}

function showResult(style,message) {
	$('#showresult').removeClass('hide');
	$('#showresultcontent').attr('class', '');
	$('#showresultcontent').addClass(style);
	$('#showresultcontent').html(message);
}

function redirect() {
  var url = fnReplace("<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('culqi','postpayment',array(),true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
");
  location.href = url;
}

function fnReplace(url) {
  return url.replace(/&amp;/g, '&');
}

<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 defer src="https://www.culqi.com/libs/jquery.culqi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function () {
		$("#form-payment").checkout({
				inputs: [
					{ id: "#input-card",
						type: "card"},
					{ id: "#input-cvc",
						type: "cvc"},
					{ id: "#input-email",
						type: "email"
					}
				]
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
