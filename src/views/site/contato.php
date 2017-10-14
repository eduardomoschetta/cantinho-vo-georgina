<?php

/* @var $this yii\web\View */

$this->title = 'Contato';

$this->params['page'] = 'contato';

?>
<div class="divider col-sm-12 col-xs-12 col-md-12">
    <div class="header-text">
        <span>
            Contate
        </span>
        -Nos
    </div>
</div>
<div class="col-md-6 col-md-offset-1 col-sm-7 col-xs-12">
    <div class="widget">
        <h3 class="widget-title style5">
            Informações
        </h3>
        <p>
            Você pode entrar em contato conosco preenchendo o formulário ao lado,
            ou se preferir, através dos canais abaixo. 
        </p>
        <ul class="clearfix">
            <li>
                <p>
                    <span class="fa fa-envelope-o">
                    </span>
                    Email:
                    <a href="mailto:contato@cantinhovogeorgina.org">
                        contato@cantinhovogeorgina.org
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <span class="fa fa-phone">
                    </span>
                    Telefone: (51) 3108-4990
                </p>
            </li>
            <li>
                <p>
                    <span class="fa fa-whatsapp">
                    </span>
                    Whatsapp: (51) 99103-7163
                </p>
            </li>
            <li>
                <p>
                    <span class="fa fa-map-marker">
                    </span>
                    Endereço: Av. Arnaldo Bohrer, 826 - Jardim Marabá, Porto Alegre - RS, 91720-130
                </p>
            </li>
        </ul>
    </div>
    <!-- widget -->
</div>
<!-- col-md-7 -->
<div class="contact-form-full col-md-4 col-sm-4 col-xs-11">
    <div class="inner contact">
        <!-- Form Area -->
        <div class="contact-form">
            <!-- Form -->
            <form action="#" id="contact-us" method="post">
                <!-- Left Inputs -->
                <div class="col-xs-12 wow animated slideInLeft" data-wow-delay=".5s">
                    <!-- Name -->
                    <input class="form" id="name" name="name" placeholder="Nome" required="required" type="text"/>
                    <!-- Email -->
                    <input class="form" id="mail" name="mail" placeholder="Email" required="required" type="email"/>
                </div>
                <!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                    <!-- Message -->
                    <textarea class="form textarea" id="message" name="message" placeholder="Mensagem">
                    </textarea>
                </div>
                <!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button class="form-btn semibold" id="submit" name="submit" type="submit">
                        Enviar mensagem
                    </button>
                </div>
                <!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear">
                </div>
            </form>
            <!-- Your Mail Message -->
            <div class="mail-message-area">
                <!-- Message -->
                <div class="alert gray-bg mail-message not-visible-message">
                    <strong>
                        Obrigado !
                    </strong>
                    Seu e-mail foi entregue e será respondido em breve.
                </div>
            </div>
        </div>
        <!-- End Contact Form Area -->
    </div>
    <!-- End Inner -->
</div>
<!-- wrapper -->
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d280.00292530200653!2d-51.20077500489282!3d-30.082312497987367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b52462a8cfed4c4!2sCreche+Cantinho+da+V%C3%B3+Georgina!5e1!3m2!1sen!2sbr!4v1507442088164" frameborder="0" style="border:0; width: 100%;" height="450" allowfullscreen></iframe>
</section>