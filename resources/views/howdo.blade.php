@extends('welcome')

@section('content')
<section>
	<div class="row content">
		<div class="col-md-6 col-sm-6 text_section">
	     	<h1>Como funciona a energia solar?</h1>
	     	<p>Como é que os raios do sol se transformam em energia para alimentar o consumo
			dos seus aparelho elétricos? Essa é uma das grandes dúvidas relacionadas à
			energia solar, não é?</p>
			<p>Antes de falarmos sobre os equipamentos utilizados ou a respeito da instalação
			de um sistema fotovoltaico, veremos neste capítulo como a energia solar chega
			às tomadas da sua residência ou empresa. Confira todas as etapas envolvidas no
			processo:</p>
			<ul class="ul-stripped">
				<li>Recepção da energia solar fotovoltaica pelo painel solar. Os painéis solares
				que são instalados no telhado do imóvel ou em estrutura metálica no
				solo, reagem com a luz do sol e produzem energia elétrica (fotovoltaica)
				em corrente contínua;
				</li>
				<li>A energia produzida pelos painéis solares é convertida em corrente
				alternada pelo inversor solar, tornando possível a sua utilização
				pelos aparelhos elétricos que você deseja ligar;
				</li>
				<li>Ao chegar no "quadro de luz" a energia solar gerada é distribuida em todo
				o imóvel, diminuindo, assim, o consumo da energia que você compra da
				concessionária;
				</li>
				<li>Com o medidor bidirecional você controla a quantidade de energia
				injetada e a consumida na rede;</li>
				<li>A energia injetada na rede da concessionária se transforma em créditos
				que podem ser utilizados para reduzir a sua conta de energia elétrica
				no local de geração ou em outra conta de mesma titularidade, esses
				créditos têm validade de 60 meses</li>
			</ul>
	    </div> 
	    <div class="col col-sm-6">
	      	<img class="img_9" src="{{ asset('img/img_9.png') }}"  />
	    </div>
	</div>   
	<div class="row content ">
    	<h2 class="text-center">De maneira simplificada, o sistema fotovoltaico funciona conforme o ilustração abaixo:</h2>
      	<img class="img_10" src="{{ asset('img/img_10.png') }}"  /> 
      	<div class="col-md-4 col-sm-6 text_section">
	      	<h4><b>Painel Fotovoltaico</b></h4>
			<p>Os painéis fotovoltaicos são os responsáveis por captar a
			energia do sol, sendo constituídos por células de um material
			semicondutor. A maior parte dos painéissão compostos por
			silício, o segundo elemento mais abundante na Terra, que
			também está presente no vidro, na areia e na argila.</p>
			<p>Os tipos de painéis de silício mais empregados são o
			monocristalino e o policristalino. O monocristalino confere
			maior eficiência ao sistema, além de conseguir operar mesmo
			sob baixaluminosidade. O policristalino tem um sistema de
			produção quegera menosresíduo e apresenta preços
			inferiores ao primeiro.</p>
	    </div>
	    <div class="col-md-4 col-sm-6 text_section">
	      	<p>As células são formadas por duas camadas carregadas, uma
			positiva e a outra negativa. Com a incidência da radiação solar,
			oselétrons da camada negativa são liberados e se direcionam
			até a positiva, o que faz com que haja corrente elétrica.
			Embora esses equipamentos possuam garantia de geração de
			no mínimo 80%durante 25 anos, a vida útil deles costuma ser
			superior.</p>
	    </div>
	</div>   
</section>
@endsection