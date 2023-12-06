<?php 
include('conexao.php');


if(!isset($_SESSION)){
	session_start();
	}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700
	;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;
	1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="dist/style-db.css">
	<link rel="icon" href="assets/icons/site_icon.svg">	
	<title>CLC - Dashboard - Seus Ativos</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="site_icon.svg"> 
			 CryptoLand</a>
		<ul class="side-menu">
			<li><a href="#" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li class="divider" data-text="PRINCIPAL">Main</li>
			<li>
				<a href="#"><i class='bx bxs-inbox icon' ></i> Produtos <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Criptomoedas</a></li>
					<li><a href="#">DeFi</a></li>
					<li><a href="#">Staking</a></li>
					<li><a href="#">NFTs</a></li>
				</ul>
			</li>
			<li><a href="#"><i class='bx bxs-chart icon' ></i> Comprar</a></li>
			<li><a href="#"><i class='bx bxs-widget icon' ></i> Vender</a></li>
			<li class="divider" data-text="TABELAS"></li>
			<li><a href="#"><i class='bx bx-table icon' ></i> Gráficos</a></li>
			
		</ul>
		<div class="ads">
			<div class="wrapper">
				<a href="#" class="btn-upgrade">Upgrade</a>
				<p>Assine o <span>CLC</span> e aproveite<span>Todas as exclusividades</span></p>
			</div>
		</div>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Procurar...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Perfil</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Configurações</a></li>
                    <li><a href="logout.php"><i class='bx bxs-log-out-circle' ></i> Sair</a></li>
                    
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>R$ 2534</h2>
							<p>Ativos</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">14%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2> <?php 
							
$cotacoes_json = file_get_contents("https://economia.awesomeapi.co.br/last/USD-BRL,EUR-BRL,BTC-BRL");


$cotacoes = json_decode($cotacoes_json, true);


$cotacao_bitcoin = $cotacoes['BTCBRL']['bid'];


echo $cotacao_bitcoin;
							
							?> <h2>
							<p>Bitcoin</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>	
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">17%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>R$ 10.933,35</h2>
							<p>Ethereum</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="30%"></span>
					<span class="label">21%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>R$ 1,98</h2 >
							<p>Cardano</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="80%"></span>
					<span class="label">8%</span>
				</div>
			</div>
			<div class="data">
				<div class="content-data">
					<div class="head">
						<h3>Relatório Ganhos/Perdas</h3>
						<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Salvar</a></li>
								<li><a href="#">Remover</a></li>
							</ul>
						</div>
					</div>
					<div class="chart">
						<div id="chart"></div>
					</div>
				</div>
				<div class="content-data">
					<div class="head">
						<h3>Atendimento ao cliente</h3>
						<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="#">Editar</a></li>
								<li><a href="#">Salvar</a></li>
								<li><a href="#">Remover	</a></li>
							</ul>
						</div>
					</div>
					<div class="chat-box">
						<p class="day"><span>Hoje</span></p>
						<div class="msg">
							<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
							<div class="chat">
								<div class="profile">
									<span class="username">Lucas</span>
									<span class="time">18:30</span>
								</div>
								<p>Olá</p>
							</div>	
						</div>
						<div class="msg me">
							<div class="chat">
								<div class="profile">
									<span class="time">18:30</span>
								</div> Olá! Qual sua dúvida?</div>
						</div>
						<div class="msg me">
							<div class="chat">
								<div class="profile">
									<span class="time">18:30</span>
								</div>A nossa equipe de suporte vai entrar em contato para resolver.</div>
						</div>
						<div class="msg me">
							<div class="chat">
								<div class="profile">
									<span class="time">18:30</span>
								</div>
								<p>Obrigado por escolher a CryptoLand!</p>
							</div>
						</div>
					</div>
					<form action="#">
						<div class="form-group">
							<input type="text" placeholder="Digite...">
							<button type="submit" class="btn-send"><i class='bx bxs-send'></i></button>
						</div>
					</form>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="app/js/script-db.js"></script>
</body>
</html>