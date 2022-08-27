<div class="container-fluid home-01">
    <div class="container faixa-01">    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p>ANTECIPE-SE AO LANÇAMENTO</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center tt-01">
            <p>Seja bem-vindo ao 1° Residencial </br>
            Resort & Olival do Brasil.</p>
        </div>
    </div>
</div>
<div class="container-fluid padding-off home-conteudo">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off">
        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/home-img.png">
    </div>
    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 wow fadeInRightBig">
        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logo-terroir31.png">
    </div>
    <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10 padding-off wow fadeInLeftBig">
        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/linha.png">
    </div>
    
    <div class="container segredos wow fadeInDown">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <p>Um lugar. Inúmeros segredos.</p>
        </div>
    </div>
    <div class="container altopadrao wow fadeInDown">
        <div class="box-altopadrao">
            <h3>CONDOMÍNIO DE ALTO PADRÃO</h3>
            <p>CASAS EM TERRENOS DE 1000 A 3000 M², </br>
                COM OLIVEIRAS ADULTAS E PRODUTIVAS </br>
                JÁ PLANTADAS NA EXTENSÃO DO SEU QUINTAL.</p>
        </div>
    </div>
    <div class="lista-infos wow fadeInUp">
        <ul>
            <li>CASAS DE 157, 272 E 556 M² PRIVATIVOS</li>
            <li>4 LAGOS</li>
            <li>RESORT COM LAZER COMPLETO</li>
            <li>SERVIÇO COMPLETO DE HOTELARIA</li>
            <li>2 RESTAURANTES E EMPÓRIO</li>
            <li>HELIPONTO - GARAGEM </br>
                ESTACIONAMENTO - ALOJAMENTO</li>
            <li>SISTEMA DE SEGURANÇA, </br>
                COM PORTARIA 24 HORAS</li>
        </ul>
    </div>
    <div class="container investimento wow fadeInUp">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <p>Um investimento exclusivo. </br>
            Um segredo e um privilégio para poucos.</p>
        </div>
    </div>
    <div class="container contato wow fadeIn">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tt-form text-center">
            <p>PREENCHA O FORMULÁRIO </br>
            PARA TER MAIS INFORMAÇÕES:</p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off">
                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="NOME*" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-MAIL*" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <input id="telefone" type="text" class="telefone form-control" name="telefone" placeholder="TELEFONE" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off">
                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <textarea id="form-mensagem" class="msg form-control" rows="4" name="mss" required="required" placeholder="MENSAGEM"></textarea>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <button type="submit" class="btn_enviar btn" title="Enviar" name="enviar_email" value="enviar">Enviar</button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <small>* Os campos marcados com asterisco são de preenchimento obrigatório.</small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Usamos cookies para garantir que obtenha sempre a melhor experiência ao visitar o nosso website, para medir a utilização e o desempenho, bem como apresentar anúncios. Ao clicar em "Aceito", concorda com as nossas configurações padrão e a nossa <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de Privacidade</a>.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div> -->

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>