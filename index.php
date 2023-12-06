
<?php 
include 'conexao.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CryptoLand - Compra e Venda de Criptoativos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/main.css"/>
        <link rel="icon" href="site_icon.svg">
    </head>
    <body>

        <div class="page-wrapper bg-dark">
            <!-- header -->
            <div class="header-wrapper">
                <header class="header flex">
                    <div class="container w-full flex-1 flex">
                        <div class="header-content w-full flex-1 flex flex-col">
                            <nav class="navbar flex items-center justify-between">
                                <div class="brand-and-toggler flex items-center justify-between w-full">
                                    <a href="#" class="navbar-brand flex items-center">
                                        <img src="site_icon.svg">
                                        <span class="brand-text">CryptoLand</span>
                                    </a>
                                    <button type="button" class="navbar-show-btn">
                                        <img src="menu_icon.svg" />
                                    </button>
                                </div>

                                <div class="navbar-list-wrapper flex items-center">
                                    <ul class="nav-list flex items-center">
                                        <button type="button" class="navbar-hide-btn">
                                            <img src="close.svg" />
                                        </button>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link text-base no-wrap">Sobre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link text-base no-wrap">Mercado</a>
                                        </li>
                                        
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link text-base no-wrap">Contato</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link text-base no-wrap">Negócios</a>
                                        </li>
                                       
                                    </ul>

                                    <div class="sign-btns flex items-center">
                                        <a href="login.php" class="btn text-base">Entrar</a>
                                        <a href="registro.php" class="btn btn-g-blue-veronica text-base">Inscrever-se</a>
                                    </div>
                                </div>
                            </nav>

                            <div class="header-intro flex-1 flex flex-col items-center justify-center text-center">
                                <h1>Compre e Venda ativos digitais na CryptoLand</h1>
                                <a href="#" class="btn btn-base btn-g-blue-veronica text-base">Começar agora!</a>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="info flex items-center justify-center">
                    <div class="container">
                        <div class="info-content grid">
                            <div class="info-item text-center">
                                <img src="login_icon.svg" alt="" />  
                                <h3 class="info-item-title">Cadastre-se</h3>
                                <p class="text-base text info-item-text">Cadastre-se na CryptoLand, conecte sua carteira e comece negociar.</p>
                                <a href="#" class="flex-inline items-center btn-link">
                                    <span class="link-text text-lavender text text-base">Cadastrar agora</span>
                                    <img src="arrow.svg" class="link-icon"/>
                                </a>
                            </div>

                            <div class="info-item text-center">
                                <img src="create_icon.svg" alt="" />
                                <h3 class="info-item-title">Negocie</h3>
                                <p class="text-base text info-item-text">Com CryptoLand é a maneira mais fácil, segura e rápida de comprar e vender troca de ativos criptográficos.</p>
                                <a href="#" class="flex-inline items-center btn-link">
                                    <span class="link-text text-lavender text text-base">Negociar agora</span>
                                    <img src="arrow.svg" class="link-icon"/>
                                </a>
                            </div>

                            <div class="info-item text-center">
                                <img src="manage_icon.svg" alt="" />
                                <h3 class="info-item-title">Domine seus ativos</h3>
                                <p class="text-base text info-item-text">Gerencie seus acervos de qualquer lugar, administre e obtenha seus ganhos.</p>
                                <a href="#" class="flex-inline items-center btn-link">
                                    <span class="link-text text-lavender text text-base">Ver ativos agora</span>
                                    <img src="arrow.svg" class="link-icon"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of header -->

            <main>
                <section class="page-sc-one flex items-center justify-center">
                    <div class="container">
                        <div class="sc-one-content text-center">
                            <div class="title-wrapper">
                                <h2 class="large-title">Uma plataforma de mineração de criptoativos que investe em você.</h2>
                                <p class="text text-base">Com o CryptoLand Trade, você pode ter certeza de que suas habilidades de negociação serão compatíveis.</p>
                                <a href="#" class="btn btn-base btn-g-blue-veronica text-base">Começar agora</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="page-sc-two flex items-center">
                    <div class="container">
                        <div class="sc-two-content">
                            <div class="sc-two-left">
                                <img src="support.png" />
                            </div>
                            <div class="sc-two-right">
                                <h2 class="large-title">Acesso 24 horas por dia, 7 dias por semana ao serviço completo de suporte ao cliente
                                </h2>
                                <p class="text text-base">Tenha certeza de que você (e somente você) terá acesso aos seus fundos.</p>
                                <a href="#" class="btn btn-base btn-white text-base">Começar agora</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="page-sc-fees flex items-center">
                    <div class="container">
                        <div class="sc-fees-content text-center">
                            <div class="title-wrapper">
                                <h2 class="large-title">Compre e venda com as taxas mais baixas do mercado</h2>
                                <p class="text text-base">Observe os valores das criptomoedas em tempo real: acompanhe as flutuações de preços das moedas digitais no mercado financeiro instantaneamente.</p>
                                <a href="#" class="flex-inline items-center btn-link">
                                    <span class="link-text text-lavender text text-base">Saiba mais</span>
                                    <img src="arrow.svg" class="link-icon" />
                                </a>
                            </div>

                            <div class="data-table-wrapper">
                                <div class="data-table">
                                    <table class="table">
                                        <tr class="grid">
                                            <td class="flex items-center justify-center text-lg">Bitcoin</td>
                                            <td class="flex items-center justify-center text-lavender text-lg">BTC</td>
                                            <td class="flex items-center justify-center text-lg">$56,290.30</td>
                                            <td class="flex items-center justify-center text-mint text-lg">+1.68%</td>
                                            <td class="flex items-center justify-center">
                                                <img src="small-graph1.png" class="graph-img" />
                                            </td>
                                            <td class="flex items-center justify-center">
                                                <a href="#" class="table-link flex items-center">
                                                    <span class="link-text no-wrap text-base">Trade Now</span>
                                                    <img src=".arrow_white.svg" class="link-icon" />
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="grid">
                                            <td class="flex items-center justify-center text-lg">Ethereum</td>
                                            <td class="flex items-center justify-center text-lavender text-lg">ETH</td>
                                            <td class="flex items-center justify-center text-lg">$7,290.30</td>
                                            <td class="flex items-center justify-center text-mint text-lg">+4.25%</td>
                                            <td class="flex items-center justify-center">
                                                <img src="small-graph2.png" class="graph-img" />
                                            </td>
                                            <td class="flex items-center justify-center">
                                                <a href="#" class="table-link flex items-center">
                                                    <span class="link-text no-wrap text-base">Trade Now</span>
                                                    <img src=".arrow_white.svg" class="link-icon" />
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="grid">
                                            <td class="flex items-center justify-center text-lg">Cardano</td>
                                            <td class="flex items-center justify-center text-lavender text-lg">ADA</td>
                                            <td class="flex items-center justify-center text-lg">$1.8</td>
                                            <td class="flex items-center justify-center text-mint text-lg">+3.43%</td>
                                            <td class="flex items-center justify-center">
                                                <img src="small-graph3.png" class="graph-img" />
                                            </td>
                                            <td class="flex items-center justify-center">
                                                <a href="#" class="table-link flex items-center">
                                                    <span class="link-text no-wrap text-base">Trade Now</span>
                                                    <img src="arrow_white.svg" class="link-icon" />
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="grid">
                                            <td class="flex items-center justify-center text-lg">Wax</td>
                                            <td class="flex items-center justify-center text-lavender text-lg">WAXP</td>
                                            <td class="flex items-center justify-center text-lg">$0.97</td>
                                            <td class="flex items-center justify-center text-mint text-lg">+2.62%</td>
                                            <td class="flex items-center justify-center">
                                                <img src="small-graph4.png" class="graph-img" />
                                            </td>
                                            <td class="flex items-center justify-center">
                                                <a href="#" class="table-link flex items-center">
                                                    <span class="link-text no-wrap text-base">Trade Now</span>
                                                    <img src="arrow_white.svg" class="link-icon" />
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="grid">
                                            <td class="flex items-center justify-center text-lg">Poldadot</td>
                                            <td class="flex items-center justify-center text-lavender text-lg">DOT</td>
                                            <td class="flex items-center justify-center text-lg">$42.22</td>
                                            <td class="flex items-center justify-center text-mint text-lg">+7.56%</td>
                                            <td class="flex items-center justify-center">
                                                <img src="./assets/images/small-graph5.png" class="graph-img" />
                                            </td>
                                            <td class="flex items-center justify-center">
                                                <a href="#" class="table-link flex items-center">
                                                    <span class="link-text no-wrap text-base">Trade Now</span>
                                                    <img src="arrow_white.svg" class="link-icon" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="page-sc-invest flex items-center">
                    <div class="container">
                        <div class="sc-two-content">
                            <div class="sc-two-left">
                                <h2 class="large-title">Seja um CLC ©</h2>
                                <p class="text text-base">CryptoLandClub é um clube de assinatura para reunir e compartilhar experiências sobre o mundo Web 3.0, o CryptoLandClub. Troque suas recompensas por prêmios exclusivos da comunidade.

                                    Explorar mais.</p>
                                <a href="#" class="btn btn-base btn-white text-base">Ser um CLC</a>
                            </div>
                            <div class="sc-two-right">
                                <img src="support.png" />
                            </div>
                        </div>
                    </div>
                </section>

                <section class="page-sc-subscribe">
                    <div class="container">
                        <div class="sc-subscribe-content text-center">
                            <h2 class="large-title">Receber transmissões e novidades</h2>
                            <p class="text text-base">Cancele a inscrição a qualquer momento.<span class="text-white">Política de Privacidade.</span></p>

                            <form class="flex items-center justify-center">
                                <div class="input-group flex items-center justify-between">
                                    <input type="text" class="input-control" placeholder="Email">
                                    <button type="submit" class="input-btn flex items-center justify-center">
                                        <img src="arrow_white.svg" />
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="footer">
                <div class="container">
                    <div class="footer-content grid">
                        <div class="footer-item">
                            <p class="text text-base">CryptoLand, a operadora líder mundial de caixas eletrônicos de bitcoin, torna muito fácil comprar e vender bitcoin por meio de dinheiro, cartão ou transferência bancária.</p>
                            <p class="text text-base">Inscreva-se para receber as últimas notícias, descontos e muito mais do CL.</p>

                            <form class="flex items-center">
                                <div class="input-group flex items-center justify-between">
                                    <input type="text" class="input-control" placeholder="Email"/>
                                    <button type="submit" class="input-btn flex items-center justify-center">
                                        <img src="arrow_white.svg" />
                                    </button>
                                </div>
                            </form>
                            <p class="text text-base">&copy; 2023 Desenvolvido por Lucas Santos</p>
                        </div>

                        <div class="footer-item">
                            <h4 class="footer-item-title text-gray text-base">Empresa</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Sobre</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Carreiras</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Imprensa</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Notícias</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Links</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-item">
                            <h4 class="footer-item-title text-gray text-base">Política de Privacidade e Termos</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Política de privacidade do CL</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Política de privacidade de biometria</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Aviso de Política Financeira</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Termos de serviço</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-link text-gray text-base">Termos de serviço da mesa comercial</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        

        <script src="app/js/script.js"></script>
    </body>
</html>