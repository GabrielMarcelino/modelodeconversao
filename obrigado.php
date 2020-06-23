<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Modelo de Conversão - Aprenda a vender qualquer coisa pela internet">
    <meta name="author" content="Gabriel Marcelino">
    <title>Obrigado por se Cadastrar !</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="css/obrigado.css">
</head>

<body>
    <?php
                         if (isset($_POST['BTEnvia'])){
 
	                     //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 	                     //====================================================
	                     $email_remetente = "gabrielmarcelino@mclweb.com.br"; // deve ser um email do dominio
	                     //====================================================
 
 
	                     //Configurações do email, ajustar conforme necessidade
	                     //====================================================
	                     $email_destinatario = "carlosfelipe.negocios@gmail.com"; // qualquer email pode receber os dados
	                     $email_reply = "$email";
	                     $email_assunto = "Cadastro de email - Site Modelo de Conversão";
	                     //====================================================
 
 
	                     //Variaveis de POST, Alterar somente se necessário
	                     //====================================================
	                     $email = $_POST['email'];
	                     
	                     //====================================================
 
	                     //Monta o Corpo da Mensagem
	                     //==================================================== 
	                     $email_conteudo = "Email = $email \n";                         
	       
 	                     //====================================================
 
	                     //Seta os Headers (Alerar somente caso necessario)
	                     //====================================================
	                     $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	                     //====================================================
 
 
	                     //Enviando o email
	                     //====================================================
	                     if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		                     
                             echo "<script>alert('Foi enviado com sucesso, obrigado por se cadastrar !');</script>";

	                    }
  	                    else{
		                     echo "</b>Falha no envio do E-Mail!</b>";
	                    }
	                     //====================================================
                        }	
                       ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="img/logo.png" alt="">
                <h1 class="text-center">Muito obrigado !</h1>
                <h3 class="text-center mt-4">Falta apenas 1 passo:</h3>

                <p class="text-center mt-4">Acesse sua conta de e-mail para verificar a mensagem de inscrição
                    enviada pelo Modelo de Conversão.</p>

                <h5 class="text-center">Junte-se no Telegram</h5>
                <a target="_blank" href="https://t.me/modelodeconversao" class="btn btn-telegram"><i class="fa fa-telegram"></i><span>Telegram</span></a>

                <h5 class="text-center">Inscreva-se no Youtube</h5>
                <p class="text-center">Inscreva-se no canal do youtube para ter acesso a essas e outras aulas exclusivas do Modelo de Conversão</p>
                <a target="_blank" href="https://www.youtube.com/channel/UCbPPez-1IaKpg6Cb8c5Q0ZA?" class="btn btn-youtube"><i class="fa fa-youtube-play"></i><span>Inscreva-se</span></a>

                <ul class="mt-5">
                    <li><a href="" data-toggle="modal" data-target="#myModalConsideracoes">Considerações importantes</a></li>
                    <li><a href="" data-toggle="modal" data-target="#myModalPolitica">Política de privacidade</a></li>
                    <li><a href="" data-toggle="modal" data-target="#myModalTermos">Termos de uso</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal Considerações Inportantes-->
    <div id="myModalConsideracoes" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Considerações Importantes</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Obrigado por estar conosco em nosso site!
                        Todos os produtos ou serviços que são oferecidos nesse site não devem ser entendidos como uma promessa ou como uma garantia de ganhos.
                        O nível de sucesso que alcançará e a qualidade de seus resultados estão diretamente ligados ao tempo de dedicação que você tem para estudo de nossos produtos ou serviços. Além disso, é preciso levar em conta o seu nível de entendimento sobre as informações, sobre as técnicas apresentadas, suas habilidades, seus conhecimentos e também a sua disponibilidade financeira.
                        Todos os fatores citados anteriormente variam de pessoa para pessoa, então seria impossível garantir o sucesso de todos ou o mesmo nível de ganhos, por isso, não somos os responsáveis por qualquer ação que possa vir a tomar.
                        Todas as declarações, informações e depoimentos contidos nesse site ou em qualquer um de nossos produtos são 100% reais e é apenas a nossa opinião sobre o potencial de ganhos que qualquer pessoa pode ter.
                        Diversos fatores serão responsáveis por seus resultados, por isso, não nos sentimos no direito de dar garantias de que você vai conseguir ter os mesmos resultados ou ganhos que obtivemos, bem como nenhuma outra pessoa. Na verdade, não damos qualquer garantia de que você ou qualquer outra pessoa terá qualquer resultado com as ideias, técnicas e informações disponibilizadas nesse site.
                        Perceberá que histórias de sucessos e depoimentos que foram ou serão incluídas nesse site, não representam à média ou uma história típica do cliente.
                        Na realidade, assim como ocorre em qualquer produto ou serviço comercializado no mercado, muitas pessoas irão adquirir nossos produtos, mas não irão usá-los em tudo da forma com que indicamos, portanto não irão obter qualquer resultado. Com isso, ao comprar os nossos produtos, você deve assumir que também pode não obter qualquer resultado.
                        E por mais que não ofereçamos qualquer garantia de que você obterá resultados, você ainda pode continuar utilizando a nossa política de retorno, se não estiver satisfeito com o conteúdo que está sendo entregue. Para esses casos, você pode solicitar o reembolso do valor investido de acordo com os termos e prazos estabelecidos em cada produto. Essa informação você sempre encontrará na seção Termos e Condições.
                        Com isso, VOCÊ CONCORDA e ENTENDE TOTALMENTE que o modelo de conversão, responsável pelo treinamento modelo de conversão, NÃO SERÁ RESPONSÁVEL PELO SEU SUCESSO E NEM PELO SEU FRACASSO, POIS NÃO DÁ NENHUMA GARANTIA OU REPRESENTAÇÃO DE QUE OS SEUS PRODUTOS OU SERVIÇOS produzirão qualquer resultado particular PARA VOCÊ!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ciente</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fim Modal Considerações Inportantes-->


    <!-- Modal Política de Privacidade-->
    <div id="myModalPolitica" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Política de Privacidade</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p> <span>Informações do Usuário</span><br>

                        – É importante coletarmos algumas informações dos usuários de nossos serviços para que possamos oferecer um site melhor e mais direcionado às suas preferências. Também precisamos informá-los sobre novidades e informações relevantes. Por isso, leia atentamente esta política e nossos termos de uso.
                        – Garantimos que quaisquer informações pessoais dos usuários não serão fornecidas, publicadas ou comercializadas em quaisquer circunstâncias. Estas informações estão seguras conosco. Exceto em casos de participação do usuário em algum comentário ou postagem. Neste caso, o nome, email e depoimento poderão ser publicados, conforme nossos termos de uso.<br>
                        <span>Cadastro</span><br>

                        – Nós nunca enviamos e-mails solicitando confirmação de dados/cadastro ou com anexos executáveis (extensão exe, com, scr, bat) e links para download.<br>
                        – Para usufruir dos benefícios adicionais do site e receber o email com informações sobre nossos serviços, você precisa se cadastrar em algum de nossos formulários de opt-in. Este cadastro é armazenado em um banco de dados protegido e sigiloso.<br>
                        – Caso não queira receber mais nossos informativos, basta clicar no link de cancelamento que há no rodapé de cada mensagem ou nos avisar através de e-mail. Nós nunca enviamos spams.<br>
                        <span>Cookies</span><br>

                        – Podemos utilizar a tecnologia de cookies para melhorar a experiência do usuário. Isso auxilia na identificação do seu IP, facilitando a navegação e customizando a navegação. Você pode bloquear qualquer uso de cookies diretamente no seu navegador.<br>
                        <span>Compartilhamento de informações</span><br>
                        – Para fins de segurança, as informações poderão ser compartilhadas quando houver requerimento de autoridades judiciais ou governamentais competentes para fins de investigações pessoais conduzidas por elas, mesmo que não exista uma ordem judicial, por exemplo (e sem limitar-se a) quando tratar-se de investigação de caráter penal ou a violação de direitos do autor, ressalvadas as hipóteses de sigilo de informações determinadas por leis em vigor, ou ainda, comunicar informações quando haja motivos suficientes para considerar que a atividade de um usuário seja suspeita de tentar ou de cometer um delito ou tentar prejudicar outras pessoas.<br>
                        – Possuímos links de acesso para outros sites e que não estão cobertos por esta política. Assim, verifique a política de privacidade desses sites, tendo em vista que suas informações serão administradas de acordo com a política de cada um deles e que podem diferenciar das nossas.<br>
                        <span>Dúvidas e correção de dados</span><br>

                        – Em caso de dúvidas o usuário poderá entrar em contato pelo e-mail: modelodeconversao@gmail.com (A/C Departamento Jurídico).<br>
                        – Reservamo-nos o direito de alterar a política a qualquer momento.
                        Rua São Sebastião, 15 QD: 59 Loja A – Engenho do Mato – Niterói – CEP: 24346190.
                        Fone: (21) 97159-6306
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ciente</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fim Modal Política de Privacidade-->


    <!-- Modal Termos de Uso-->
    <div id="myModalTermos" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Termos de Serviço</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Estes termos de serviço regulam o uso deste site. Ao acessá-lo você concorda com estes termos. Por favor, consulte regularmente os nossos termos de serviço. <br>
                        <span>Acesso ao site</span> <br>
                        Para acessar o conteúdo deste site poder ser solicitado ao usuário algumas informações pessoais como nome, e-mail e outros. Se acharmos que as informações não são corretas ou verdadeiras, temos o direito de recusar e/ou cancelar o acesso a qualquer tempo, sem notificação prévia. <br>
                        <span>Restrições ao uso</span> <br>
                        Você só poderá usar este site para propósitos permitidos por nós. Você não poderá usá-lo em qualquer outro objetivo, especialmente comercial, sem o nosso consentimento prévio. Não associe nossas marcas a nenhuma outra. Não exponha nosso nome, logotipo, logomarca entre outros, indevidamente e de forma a causar confusão. <br>
                        <span>Propriedade da informação</span> <br>
                        O conteúdo do site não pode ser copiado, distribuído, publicado, carregado, postado ou transmitido por qualquer outro meio sem o nosso consentimento prévio, a não ser que a finalidade seja apenas a divulgação. <br>
                        <span>Hyperlinks</span> <br>
                        Este site pode conter links para outros websites que não são mantidos ou relacionados à nossa empresa. Não somos responsáveis pelo conteúdo destes links. O usuário assume completamente o risco ao acessar estes hyperlinks. <br>
                        <span>Comentários</span> <br>
                        Ao postar algum comentário ou depoimento em nosso site você autoriza a publicação do mesmo em qualquer lugar que desejarmos, a fim de cooperar com a divulgação de nossos produtos. <br>
                        <span>Aviso legal</span>
                        A informação obtida ao usar este site não é completa e não cobre todas as questões, tópicos ou fatos que possam ser relevantes para seus objetivos. O uso deste site é de sua total responsabilidade. O conteúdo é oferecido como está e sem garantias de qualquer tipo, expressas ou implícitas. O conteúdo deste site não é palavra final sobre qualquer assunto, e podemos fazer melhorias a qualquer momento. <br>
                        Você, e não a nossa empresa, assume o custo de qualquer serviço, reparo ou correção necessários no caso de qualquer perda ou dano consequente do uso deste site ou seu conteúdo. <br>
                        Você entende que nossa empresa não pode e não garante que arquivos disponíveis para download da Internet estejam livres de vírus, worms, cavalos de Tróia ou outro código que possa manifestar propriedades contaminadoras ou destrutivas. <br>
                        <span>Limitação de responsabilidade</span>
                        A EMPRESA, SUAS FILIAIS, AFILIADOS, LICENCIANTES, PROVEDORES DE SERVIÇO, PROVEDORES DE CONTEÚDO, EMPREGADOS, AGENTES, ADMINISTRADORES E DIRETORES NÃO SERÃO RESPONSÁVEIS POR QUALQUER DANO EVENTUAL, DIRETO, INDIRETO, PUNITIVO, REAL, CONSEQUENTE, ESPECIAL, EXEMPLAR OU DE QUALQUER OUTRO TIPO, INCLUINDO PERDA DE RECEITA OU RENDA, DOR E SOFRIMENTO, ESTRESSE EMOCIONAL OU SIMILARES MESMO QUE A EMPRESA TENHA ACONSELHADO SOBRE A POSSIBILIDADE DE TAIS DANOS. DE NENHUMA FORMA A RESPONSABILIDADE COLETIVA DA EMPRESA E SUAS FILIAIS, AFILIADOS, LICENCIANTES, PROVEDORES DE SERVIÇO, PROVEDORES DE CONTEÚDO, EMPREGADOS, AGENTES, ADMINISTRADORES E DIRETORES EM RELAÇÃO A TERCEIROS (INDEPENDENTE DO TIPO DE AÇÃO, SEJA POR CONTRATO OU QUALQUER OUTRO) EXCEDERÁ A QUANTIA DE R$100 OU O VALOR PAGO À EMPRESA POR TAL CONTEÚDO, PRODUTO OU SERVIÇO DO QUAL A QUESTÃO TENHA SIDO LEVANTADA. <br>
                        <span>Indenização</span>
                        Você vai indenizar e isentar a Empresa, suas filiais, afiliados, licenciantes, provedores de serviço, provedores de conteúdo, empregados, agentes, administradores e diretores (referidas agora como Partes Isentas) de qualquer violação deste Termo de Uso por você, incluindo o uso do Conteúdo diferente do expresso aqui. Você concorda que as Partes Isentas não têm responsabilidade ou conexão com qualquer violação ou uso não autorizado e você concorda em remediar toda e qualquer perda, dano, julgamento, prêmios, custo, despesas e honorários advocatícios das Partes Isentas ligadas a violação. Você também indenizará e isentará as Partes Isentas de qualquer reivindicação de terceiros resultante do uso da informação contida neste site. <br>
                        <span>Marcas registradas</span> <br>
                        Marcas e logos presentes neste site são propriedade da empresa ou da parte que as disponibilizaram para a empresa. A empresa e as partes que disponibilizaram marca e logo detém todos os direitos sobre as mesmas. <br>
                        <span>Informação provida pelo usuário</span> <br>
                        Você não pode publicar enviar, apresentar ou fazer conexão a esse site qualquer material que: <br>
                        você não tenha o direito de postar, incluindo material de propriedade de terceiros defenda atividade ilegal ou discutir a intenção de fazer algo ilegal; seja vulgar, obsceno, pornográfico ou indecente não diga respeito diretamente a este site; possa ameaçar ou insultar outros, difamar, caluniar, invadir privacidade, perseguir, ser obsceno, pornográfico, racista, assediar ou ofender; busca explorar ou prejudicar crianças expondo-as a conteúdo inapropriado, perguntar sobre informações pessoais ou qualquer outro do tipo; infrinja qualquer propriedade intelectual ou outro direito de pessoa ou entidade, incluindo violações de direitos autorais,marca registrada ou direitos de publicidade; violam qualquer lei ou podem ser considerados para violar a lei; personifique ou deturpar sua conexão com qualquer entidade ou pessoa; ou ainda manipula títulos ou identificadores para encobrir a origem do conteúdo promova qualquer empreendimento comercial (ex: oferecer produtos ou serviços em promoção) ou que engaje de qualquer forma em uma atividade comercial (ex: realizar sorteios ou concursos, expor banners patrocinadores e/ou solicitar bens e serviços) exceto que especificamente autorizado neste site; solicitar fundos, divulgações ou patrocinadores; inclua programas com vírus, worms e/ou Cavalos de Tróia ou qualquer outro código, arquivo ou programa de computador destinado a interromper, destruir ou limitar a funcionalidade de qualquer software ou hardware de computador ou telecomunicações; interrompa o fluxo normal da conversa, faça com que a tela “role” mais rápido que os os outros usuários conseguem acompanhar ou mesmo agir de modo a afetar a habilidade de outras pessoas de se engajar em atividades em tempo real neste site; inclua arquivos em formato MP3 desobedeça qualquer política ou regra estabelecida de tempos em tempos para o uso desse site ou qualquer rede conectada a ele; ou contenha hiperlinks para sites que contenham conteúdo que se enquadrem nas descrições acima. <br>
                        Mesmo sem a obrigação de faze-lo, nossa Empresa reserva o direito de monitorar o uso deste site para determinar o cumprimento deste Termo de Uso assim como o de remover ou vetar qualquer informação por qualquer razão. De qualquer forma você é completamente responsável pelo conteúdo de seus envios. Você sabe e concorda que nem a Empresa ou qualquer terceiro provendo conteúdo para a Empresa assumirá qualquer responsabilidade por nenhuma ação ou inação da Empresa ou referido terceiro a respeito de qualquer envio. <br>
                        <span>Segurança</span> <br>
                        Toda senha usada para este site é somente para uso individual. Você é responsável pela segurança de sua senha (se for o caso). A Empresa tem o direito de monitorar a segurança de sua senha e ao seu critério pode pedir que você a mude. Se você usar qualquer senha que a Empresa considere insegura, a Empresa tem o direito de requisitar que a senha seja modificada e/ou cancelar a sua conta. <br>
                        É proibido usar qualquer serviço ou ferramenta conectada a este site para comprometer a segurança ou mexer com os recursos do sistema e/ou contas. O uso ou distribuição de ferramentas destinadas para comprometer a segurança (ex: programas para descobrir senha, ferramentas de crack ou de sondagem da rede) são estritamente proibidos. Se você estiver envolvido em qualquer violação da segurança do sistema, a Empresa se reserva o direito de fornecer suas informações para os administradores de sistema de outros sites para ajudá-los a resolver incidentes de segurança. A Empresa se reserva o direito de investigar potenciais violações a esse Termo de Uso. <br>
                        A Empresa se reserva o direito de cooperar totalmente com as autoridades competentes ou pedidos da justiça para que a Empresa revele a identidade de qualquer pessoa que publique e-mail, mensagem ou disponibilize qualquer material que possa violar esse Termo de Uso. <br>
                        AO ACEITAR ESSE ACORDO VOCÊ ISENTA A EMPRESA DE QUALQUER CONSEQUÊNCIA RESULTANTE DE QUALQUER AÇAO DA EMPRESA DURANTE OU COMO RESULTADO DE SUAS INVESTIGAÇÕES E/OU DE AÇÕES TOMADAS RESULTANTES DE INVESTIGAÇÕES TANTO DA EMPRESA QUANTO DAS AUTORIDADES DE JUSTIÇA COMPETENTES. <br>
                        Rua São Sebastião, 15 QD: 59 Loja A – Engenho do Mato – Niterói – CEP: 24346190. <br>
                        Fone: (21) 97159-6306 <br>
                        modelodeconversao@gmail.com
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ciente</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fim Modal Termos de Uso-->

    <!-- Scroll to Top Button-->
    <a id="btn-whatsapp" class="btn-whatsapp" href="http://api.whatsapp.com/send?1=pt_BR&phone=5521971596306"><i class="fa fa-whatsapp"></i></a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
</body>

</html>