@extends('welcome')

@section('content')
<section>
	<img class="img_1" src="{{ asset('img/img_1.png') }}"  />
</section>
<section>
	<div class="row content">
	    <div class="col-12 col-md-6">
	      <img class="img_2" src="{{ asset('img/img_2.png') }}"  />
	    </div>
	    <div class="col-12 col-md-6 col-sm-6 text_section">
	     	<p><b>Energia solar é um assunto que desperta um grande interesse em
			muitas pessoas, mas também deixa muitas dúvidas sobre o seu
			funcionamento. Será que é vantajoso instalar um sistema de energia
			solar na sua residência ou na sede de sua empresa? Qual porcentagem
			do consumo é possível cobrir com essa fonte de energia? Quais são os
			custos e procedimentos envolvidos?</b></p>
			<p style="color:gray;">Apesar de já ser muito comum na Europa, a energia solar ainda é pouco
			explorada no Brasil. Entretanto, a tendência é que isso mude nos próximos
			anos: uma pesqcol-md-4 col-sm-6uisa do Ministério de Minas e Energia no Brasil, realizada em
			2014, mostra que o Brasil deve figurar entre os 20 maiores produtores de
			energia por fonte fotovoltaica até 2018. Além disso, a previsão é que 18%
			dos domicílios brasileiros terão painéis fotovoltaicos instalados até 2050.</p>
			<p><b>Os principais motivos que impulsionam esse crescimento são as políticas
			de incentivo, a redução dos custos de investimento, a capacidade de
			produtividade do território brasileiro e o aperfeiço amentodas prestadoras
			de serviço brasileiras.</b></p>
			<p><b>Os custos da energia solar no Brasil são cada vez menores por conta da
			redução dos valores dos equipamentos. Segundo The Economist, os preços
			dos módulos fotovoltaicos caíram em 20%, no momento em que
			a capacidade global dobrou - um aumento chamado de Lei de Swansom.</b></p>
	    </div>
  	</div> 
</section>
<section>
	<div class="row content">
	    <div class="col-md-4 col-sm-6 text_section">
	     	<p>Com essa queda de custos, a energia
			solar passou a ser notada como uma boa
			oportunidade de investimento, principalmente
			em um momento em que a crise energética
			é responsável pelas altas nas contas de luz.
			É uma grande oportunidade para otimizar as
			contas familiares ou alavancar os resultados
			empresariais.</p>
			<p>Com base nisso, o poder público identificou
			a energia solar como uma opção moderna
			e sustentável, criando diversas políticas
			de incentivo e modelos de financiamento.
			A partir dessas ações, os consumidores
			residenciais e empresariais encontram mais
			facilidade em adquirir sistemas que garantem
			autossuficiência na produção de energia.
			E a onda positiva em torno da energia solar
			não para por aí.</p>
	    </div>
	    <div class="col-md-4 col-sm-6 text_section">
	     	<p>O Brasil é beneficiado por possuir altos valores de irradiação solar, o
			que torna o território extremamente favorável
			à produção de energia fotovoltaica - com
			índices de radiação muito superiores aos
			da Alemanha, que é o principal modelo de
			energia solar fotovoltaica no mundo.</p>
			<p>As consequências disso tudo já podem ser
			visualizadas na prática: segundo a GREENER,
			de janeiro a julho de 2017, o mercado de
			geração distribuída cresceu 52,3% com
			relação a 2016. Com tantos fatores pesando
			à favor da energia solar, é cada vez maior a
			sua procura.</p>
	  	</div>
	    <div class="col-md-4 col-sm-6">
	      <img class="img_3" src="{{ asset('img/img_3.png') }}"  />
	    </div>
  	</div> 
</section>
@endsection