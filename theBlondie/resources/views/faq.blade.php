@extends('layout')

@section('title')
    <title>The Blondie - Shoes</title>
@endsection

@section('content')
    <div class="fondobody2">
        <div class="container slideimages">
            <header class="encabezadoFAQ">
                <h1>Preguntas Frecuentes</h1>
            </header>
            <div class="container ">

                <section class="FAQ-compras">
                    <h2 class="">PREGUNTAS SOBRE LA COMPRA</h2>
                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle">+</button>¿COMO PUEDO COMPRAR EN LA WEB WWW.THEBLONDIESHOES.COM?</h3>
                    <div id="toogle" class="collapse">
                        <ul><br>
                            <li class="">Para seleccionar el artículo de tu interés en nuestra web, has de hacer click sobre el artículo que más te guste.</li><br>

                            <li class="">Serás redirigido a una página con la ficha del producto en concreto, con varias fotografías del producto y su ficha descriptiva. Para comprarlo, deberás seleccionar el color y la talla deseada y hacer click sobre el botón de “comprar”. El artículo se incluirá directamente en tu bolsa de la compra y podrás seguir seleccionando artículos a través del botón “continuar comprando” o pasar al siguiente paso haciendo click en “comprar”.</li><br>

                            <li class="">En la siguiente pantalla, <b>deberás introducir tus datos de envío y la forma de pago: Puedes pagar con tarjeta de crédito o débito o a través de Paypal.</b><br>

                                Aunque no es obligatorio, te recomendamos seleccionar la opción "abrir una cuenta para utilizar luego". De esta manera, podrás hacer el seguimiento de tu pedido en nuestra web y guardaremos los datos de tu pedido en tu panel de usuario.<br><br>

                                Recuerda que los datos de envío deben indicarse con toda exactitud para evitar confusiones o incidencias en el envío de los artículos adquiridos. Debes indicarnos la CALLE, NÚMERO, ESCALERA, PISO, PUERTA, CÓDIGO POSTAL Y NÚMERO DE TELÉFONO porque es la única vía para que tu pedido llegue correctamente a destino. Es posible que nuestro transportista te envíe un sms para informarte de la puesta en reparto del pedido, por lo que si no rellenas este campo, no podrás recibir este mensaje. www.theblondieshoes.com no se responsabiliza de las direcciones erroneas o mal colocadas.
                            </li>
                        </ul>
                    </div>
                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle2">+</button>¿COMO PUEDO PAGAR MI COMPRA?</h3>

                    <div id="toogle2" class="collapse">
                        <p  class="">
                            <br>
                            Puedes pagar tu compra a través de tarjeta de crédito y débito de Visa, Visa Electron, MasterCard y Paypal . Si tu tarjeta es American Express, te recomendamos como medio de pago Paypal.<br><br>

                            Los pagos sólo podrán efectuarse en Euros (€).<br><br>

                            Los pagos con tarjeta de crédito o débito se realizarán on-line en tiempo real por un método seguro conectado con entidades financieras de primera línea. En ningún momento mustangstore.es alojará ni guardará datos de tarjetas bancarias. Recuerda que deberás tener operativa, vigente y habilitada para pagos seguros por Internet tu tarjeta de débito o crédito, así como los datos o claves de seguridad que su entidad bancaria requiera. Si tienes dudas sobre estas condiciones, por favor, contacta con tu banco.<br><br>

                            Si deseas solicitar factura, contacta con nosotros indicando los datos completos de tu pedido, así como su razón social y DNI.
                        </p>
                    </div>

                    <h2 class="">POLÍTICAS DE ENVÍO</h2>
                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle3">+</button>¿CUÁL ES EL COSTE DEL ENVÍO?</h3>

                    <div id="toogle3" class="collapse">
                        <p  class="">
                            <br>
                            El coste mínimo del envío en la web www.theblondieshoes.com es de $150 (IVA incluido).<br><br>

                            Para más información consultar el costo segun localidad.<br><br>

                            El envío es gratis en pedidos superiores a $2000.
                        </p>
                    </div>

                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle4">+</button>¿CUÁL ES EL PLAZO DE ENTREGA?</h3>
                    <div id="toogle4" class="collapse">
                        <p  class="">
                            <br>
                            Para los productos que se encuentran en stock, el plazo de entrega es de <b>entre 24 y 48 horas laborables desde que el paquete sale de nuestro almacén central</b>.<br><br>

                            Hay que tener en cuenta que los pedidos se preparan y salen desde nuestro almacén en el mismo día para compras realizadas hasta las 16:00 horas de lunes a viernes laborables. Los pedidos realizados después de las 16:00, durante el fin de semana o días festivos, serán tramitados el siguiente día laborable.<br><br>

                            Por ejemplo, si realizaste el pedido el viernes por la tarde/noche, no se preparará hasta el lunes, por lo que lo recibirías el martes/ miércoles. Sin embargo, si el pedido lo realizaras el martes por la mañana, lo recibirías miércoles o jueves, en función de la localidad de destino.<br><br>

                            Los envíos a determinadas zonas pueden tener un retraso aproximado de un día sobre los plazos indicados.
                        </p>
                    </div>

                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle5">+</button>¿CÓMO PUEDO SABER SI MI PAQUETE HA SIDO YA ENVIADO?</h3>
                    <div id="toogle5" class="collapse">
                        <p  class="">
                            <br>
                            Si realizaste la compra habiéndote registrado previamente en nuestra web, podrás realizar el seguimiento de tu pedido desde tu panel de usuario.<br><br>

                            Recuerda que si la compra la hiciste sin haberte registrado previamente en la web (sin haber elegido una contraseña asociada a tu cuenta), tu pedido no aparecerá en tu histórico de pedidos.<br><br>

                            En ocasiones y en función de la franquicia de destino, el transportista (ENVIOS OCA) te mandará un e-mail o sms cuando ponga su paquete en reparto.<br><br>

                            Si lo recibes y no vas a estar en casa ese día, puedes contactar con ellos para acordar una nueva fecha de entrega o recogida en la oficina del transportista más próxima a tu domicilio. Desde aquí puedes consultar las oficinas de entrega de <a target="_blank" href="http://www.enviosoca.com/">Envios-Oca</a>
                        </p>
                    </div>

                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle6">+</button>¿QUÉ SUCEDE EN CASO DE QUE EN EL MOMENTO DE LA ENTREGA NO ME ENCUENTRE EN MI DOMICILIO?</h3>

                    <div id="toogle6" class="collapse">
                        <p  class="">
                            <br>
                            Dispones de un plazo máximo de diez (10) días, antes de que el paquete vuelva a ser enviado a origen.<br><br>

                            Así que por favor, si pasado nuestro plazo de entrega habitual no has recibido tu paquete, ponte en contacto con el transportista para acordar una nueva fecha de entrega o recogida en tu oficina de OCA más cercana.
                        </p>
                    </div>

                    <h2 class="">PREGUNTAS SOBRE NUESTROS PRODUCTOS Y SUS TALLAS</h2>
                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle7">+</button>¿QUÉ TALLAS SE MUESTRAN EN LA WEB?</h3>
                    <div id="toogle7" class="collapse">
                        <p  class="">
                            <br>
                            Todas las tallas mostradas en la web son continentales europeas.
                        </p>
                    </div>

                    <h3 class=""><button type="button" class="btn btn-primary btn-more" data-toggle="collapse" data-target="#toogle8">+</button>¿EL COLOR DE LAS FOTOGRAFÍAS ES EXACTO AL DE LOS PRODUCTOS REALES?</h3>
                    <div id="toogle8" class="collapse">
                        <p  class="">
                            <br>
                            www.theblondieshoes.com ha realizado un esfuerzo para mostrar los colores de los productos de la forma más cercana posible a la realidad.<br><br>

                            No obstante, el color de los productos que aparecen en su pantalla puede estar sujeto a variaciones debido a su configuración del monitor, por lo que no podemos garantizar que los colores que usted vea sean 100% fieles a la realidad.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection