 @extends('layouts.app')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">¿Cómo comprar?</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!--Contact Us-->
  <section id="contact" class="padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="uppercase heading bottom30">¿Cómo comprar?</h1>
        </div>
        
      </div>
      <p>
          Bienvenido  Comprar en valeny.com es muy fácil, sólo tendrás que seguir unos sencillos pasos:
        </p>

        <h4 class="uppercase heading bottom30">Cómo realizar la compra: </h4>

        <p>Es necesario que este  registrado para poder comprar o cotizar
Si nunca antes has comprado en Valeny.com el sistema te pedirá todos tus datos personales para registrase. 
<a href="{{ route('register')}}">{{ route('register')}}</a></p>

<p>Una vez iniciada la sesión seleccione los diseños de su gusto haciendo clic sobre la Categoría que desee (Joyas en  Plata Oro).</p>
<p>Si quieres comprarlo sólo tendrás que hacer click en el botón ,COMPRAR  y enseguida se te agregará automáticamente el producto a tu "Carro de Compras" .Podrás en  cualquier  momento
Revisar tu "carro de compras"  para eliminar algún artículo que ya  no quieras  llevar.</p>

<p>Los precios  estan en dolares americanos 
</p>


<p><b>ATENCIÓN:</b> Pedido mínimo 600 mil pesos colombianos o 600 dólares.</p>

<p>Cuando quieras terminar la compra dirígete a "COMPRAR" y sigue los pasos para finalizar tu pedido.
Haga clic sobre "COMPRAR" lo cual lo llevará directamente a una nueva ventana en la que aparecerá el valor exacto que deberá cancelar (valor de la mercancía, transporte)
Cada  Compra  Tiene un numero de "Orden de Compra" (Este número lo encuentra en el comprobante de compra al finalizar la operación). </p>


<p>Una vez realizada la  compra  te enviaremos al instante un correo electrónico con los detalles de la compra y tu pedido será almacenado en nuestra base de datos de pedidos.</p>


<b>Formas de pago:</b>

<p>Valeny.com pone a tu disposición la tecnología más moderna en sistemas de pago: tecnología de protocolo SSL (forma de pago seguro). ¿Qué es la tecnología SSL?</p>

<p>Para realizar el pago en nuestra tienda, puedes escoger entre las siguientes opciones:</p>

<p>1.- Transferencia bancaria: Forma de pago segura mediante entidad bancaria. Recibirás nuestros datos bancarios para poder realizar el ingreso del importe del pedido. Los gastos bancarios de la transferencia, correrán a cuenta del comprador.</p>
<p>. Transferencia bancaria  ( Solo Colombia )</p>

<p>2- PayPal: Forma de pago segura mediante PayPal (tecnología SSL), mediante la cual podrás realizar compras seguras en Internet. Para utilizar este método de pago es necesario que tengas una cuenta PayPal. ¿Qué es PayPal?</p>

<p>3- Envió de dinero por transferencia bancaria, con el banco de su preferencia</p>


<p>TÉRMINOS Y CONDICIONES DE NEGOCIOS</p>

<p>1.  El anillo que seleccione, se elaborará exactamente a la medida escogida.</p>
<p>2. Su compra será verificada y se procederá a su despacho con los términos siguientes:
a.  Para compras dentro del territorio colombiano, la entrega se hará en el término de 15 días hábiles a la fecha de su compra.</p>
<p>b. Para compras fuera del territorio de Colombia, la entrega se hará en el término de 15 días hábiles, adicionalmente unos 4 días hábiles más, dependiendo de la aduana del país de destino.</p>

<p>3.  El comprador se obliga a pagar un seguro para proteger su inversión, el cual cubre la totalidad del bien adquirido, desde el momento en que el servicio de transporte recoja su pedido, hasta el momento en que el cliente final lo reciba, en la dirección que el comprador nos indique.</p>

<p>4.  El valor máximo del seguro expedido por la transportadora, es por la suma de dos mil dólares americanos (USD 2000).</p>
<p>5.  Si pasado el plazo establecido para la entrega de su pedido, y este no llega, el cliente deberá comunicarse con nosotros, para poder visualizar el rastreo del sitio donde se encuentra su pedido (nosotros le enviamos # de
Guía  para que le pueda hacer el rastreo</p>
<p>6.  En caso de pérdida del pedido, al cliente se le enviara un nuevo pedido, después de verificar con la compañía de seguros, que haya expedido la póliza de cubrimiento de dicho envío.</p>
<p>7.  El cliente deberá cancelar, los impuestos de aduanas de su país, tan pronto la compañía de transporte le notifique la llegada de su pedido.</p>
<p>8.  Tanto el transporte, los seguros y los impuestos, corren por cuenta del cliente.</p>
<p>9.  El transporte, el seguro y el costo del pedido, deberán ser cancelados totalmente en el momento de la compra.</p>
<p>10.  Al tomar la decisión de comprar en este sitio, su sitio  web, acepta de antemano los términos y condiciones que  lo caracterizan.</p>
<p>11.  El comprador deberá llenar en su totalidad el formulario de registro, con el objeto de obtener verificación, del sitio o dirección, a la cual debemos enviar su respectivo pedido, y la identificación real del comprador. </p>
<p>12.  Para despachos a nivel internacional, a cualquier parte del mundo, su empresa de transporte será Servientrega World Wide, la cual les  ofrece un seguro hasta por la suma de (USD 2000) dos mil dólares Americanos.</p>
TÉRMINOS Y CONDICIONES DE PAGOS EN LÍNEA
<p>1.  Joyas  Valeny ofrece un nuevo medio de pago en línea vía internet a sus clientes con el fin de facilitar y agilizar el proceso de pago de sus compras.</p>
<p>2.  Éste servicio es de uso exclusivo para las personas que se encuentran registradas.</p>
<p>3.  El usuario debe disponer de los medios necesarios para poder acceder al servicio de pago en línea, Joyas Valeny  no se hará responsable de la disponibilidad, ni de la confiabilidad de dicho equipo o de los servicios de comunicación utilizados por el usuario.</p>
<p>4.  El pago de su compra lo puede efectuar a través de tarjetas de crédito, para lo cual debe escoger la franquicia a la que corresponda su tarjeta 2CO actualmente acepta las siguientes tarjetas de crédito:
<p>VISA</p>
<p>MasterCard</p>
<p>American Express</p>
<p>Discover/Novus</p>
<p>Diners Club</p>
<p>JCB</p>
<p>Todas las tarjetas derivadas de las previamente mencionadas, también son aceptadas.</p>
<p>2CO también acepta:*</p>
<p>PayPal Express Checkout</p>
<p>PayPal Pay Later</p>
<p>PIN Debit</p>
<p>5.  Joyas Valeny, en ninguno de los casos y bajo ninguna circunstancia, conoce o almacena los datos del cliente, números de cuenta o claves relacionadas con cualquier medio de pago vinculado con sistema , ni los datos de tarjeta debito o crédito, o de cualquier otro medio de pago relacionado con dicho sistema. (En cumplimiento con las normas PCI DSS)</p>
<p>6.  Joyas Valeny , no asume ningún tipo de responsabilidad que pueda generarse por el uso indebido, o por pérdida del control de los datos, o claves relacionadas con cualquier medio de pago vinculado con el sistema
(En cumplimiento con las normas PCI DSS)</p>
<p>7.  Joyas Valeny, no se responsabiliza por fallas en las comunicaciones o en el fluido eléctrico, en los sistemas de información, u otras que ocurran en el lugar donde usted se encuentra realizando la transacción. La fecha válida del pago será aquella en que la transacción se hace efectiva.</p>
*  El Pago con cuentas de ahorro y cuentas corrientes es un servicio disponible para clientes ubicados en Colombia.</p>


    </div>
  </section>

@endsection
