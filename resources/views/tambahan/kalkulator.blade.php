@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-custom">
				<div class="panel-heading panel-heading-custom">
					<h2 class="panel-title panel-title-custom"><i class="fa fa-calculator"></i>Kalkulator Zakat Mal</h2>
				</div>
				<div class="panel-body">
	              <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/accordion.js')}}"></script>
	              <script language="JavaScript" type="text/javascript">
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('l p(x){S x.V(2).z(/(\\d)(?=(\\d{3})+\\.)/g,"$1,")}l r(){5.6.h.4=O(5.6.H.4)+O(5.6.B.4);5.6.W.4=5.6.h.4}l Y(){7 v=9(5.6.X.4);7 k=v*18;5.6.k.4=k}l 1a(){7 P=9(5.6.16.4.f(\'.\').e(""));7 Q=P*13;5.6.C.4=Q}l 14(){5.6.E.4=9(5.6.15.4.f(\'.\').e(""))+9(5.6.11.4.f(\'.\').e(""));7 8=9(5.6.E.4);7 k=5.6.k.4;o(8<=k){m=0;5.6.G.4="w"}q{m=8;5.6.G.4="s"}5.6.17.4=8;7 h=0.t*m;5.6.H.4=p(h);r()}l 10(){7 u=9(5.6.19.4.f(\'.\').e(""))+9(5.6.1b.4.f(\'.\').e(""));7 y=9(5.6.T.4.f(\'.\').e(""));7 8=u-y;5.6.U.4=u;5.6.Z.4=y;7 R=5.6.C.4.f(\'.\').e("");o(u<=R){m=0;5.6.A.4="w"}q{m=8;5.6.A.4="s"}5.6.1g.4=8;7 h=0.t*m;5.6.B.4=p(h);5.6.1o.4=p(h*12);r()}l 1n(){7 v=9(5.6.1p.4.f(\'.\').e(""));7 J=9(5.6.1q.4.f(\'.\').e(""));7 8=v*J;5.6.1s.4=8;7 k=5.6.k.4;7 h;o(8<=k){h=0;5.6.D.4="w"}q{h=0.t*8;5.6.D.4="s"}5.6.1t.4=p(h);r()}l 1r(){7 F=9(5.6.1l.4.f(\'.\').e(""))+9(5.6.1c.4.f(\'.\').e(""))+9(5.6.1f.4.f(\'.\').e(""));7 I=9(5.6.1e.4.f(\'.\').e(""))+9(5.6.1d.4.f(\'.\').e(""));7 8=F-I;5.6.K.4=8;7 k=5.6.k.4;o(8<=k){m=0;5.6.M.4="w"}q{m=8;5.6.M.4="s"}5.6.K.4=8;7 h=0.t*m;5.6.1m.4=p(h);r()}l 1h(n){a=n.4;b=a.z(/[^\\d]/g,\'\');c=\'\';L=b.1k;j=0;1j(i=L;i>0;i--){j=j+1;o(((j%3)==1)&&(j!=1)){c=b.N(i-1,1)+\'.\'+c}q{c=b.N(i-1,1)+c}}n.4=c}l 1i(n){a=n.4;o(a!=0){n.4=a.z(/^0+/,\'\')}q{n.4=0}}',62,92,'||||value|document|Kalkulator|var|zakatable|parseInt|||||join|split||zakat|||nisab|function|zakatnya|obj|if|numberWithDots|else|calc_total|Ya|025|pendapatan|emas|Tidak||hutang|replace|wajibzp|z2|nisabgj|wajibze|ff|modal|wajibzs|z1|utang|harga|fu|lengthchar|wajibzu|substr|parseFloat|beras|nisabgaji|nisabgajinya|return|fm|fl|toFixed|disp_zakat|fz|calc_nisab|fo|calc_profesi|fg||520|calc_simpanan|fa|br|fh|85|fj|calc_nisab_gaji|fk|fke|fkrg|fhj|fpd|fp|Angka|Nol|for|length|fmod|fzu|calc_emas|z3|ems|hms|calc_usaha|tms|zems'.split('|'),0,{}))
    </script>
</head>
<body>
<form action="#" method="post" name="Kalkulator" id="Kalkulator">
<div>
<div class="judul tabhitam" dis href="#"><span class="iconkalkulator"></span><strong>KALKULATOR ZAKAT</strong></div>
<div class="accordion">
<div class="accordion-section">
<a class="accordion-section-title taborange1" href="#accordion-1"><span class="iconorang"></span>ZAKAT PROFESI</a>
<div id="accordion-1" class="accordion-section-content">
<p>
<table>
<tr><td class="od">Penghasilan per Bulan</td></tr>
<tr><td><input type="text" name="fj" onkeyup="Angka(this);Nol(this);calc_profesi()" class="isian" value="0" placeholder="0"></td></tr>
<tr><td class="od">Bonus Pendapatan dan Lain-lain (per Bulan)</td></tr>
<tr><td><input type="text" name="fk" onkeyup="Angka(this);Nol(this);calc_profesi()" class="isian" value="0" placeholder="0"></td></tr>
<input type="hidden" name="fl" class="fieldzakat" readonly="readonly">
<tr><td class="od">Pengeluaran Kebutuhan Pokok (termasuk hutang jatuh tempo) per Bulan</td></tr>
<tr><td><input type="text" name="fm" onkeyup="Angka(this);Nol(this);calc_profesi()" class="isian" value="0" placeholder="0"></td></tr>
<tr><td class="od">Harga Beras Saat Ini (per kg) <font color="#ed710f">*</font></td></tr>
<tr><td><input type="text" name="br" onkeyup="calc_nisab_gaji();Angka(this);calc_profesi()" class="isian" value="11.449" readonly="readonly"></td></tr>
<tr><td class="totallabel">NISHAB (520 kg beras)</td></tr>
<tr><td><input type="text" name="nisabgj" value="5.953.480" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">WAJIB MEMBAYAR ZAKAT PROFESI</td></tr>
<tr><td><input type="text" name="wajibzp" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">JUMLAH ZAKAT PROFESI PERBULAN</td></tr>
<input type="hidden" name="fo" class="fieldzakat" value="0" readonly="readonly">
<input type="hidden" name="fp" class="fieldzakat" value="0" readonly="readonly">
<tr><td><input type="text" name="z2" class="fieldzakat isian" value="0" readonly="readonly"></td></tr>
<tr><td class="totallabel">JUMLAH ZAKAT PROFESI PERTAHUN</td></tr>
<tr><td><input type="text" name="z3" class="fieldzakat isian" value="0" readonly="readonly"></td></tr>
<tr><td><font color="#ed710f">* Sumber : <a href="https://www.bps.go.id/LinkTableDinamis/view/id/963" target="_blank">BPS</a></font></td></tr>
<tr><td align="center" class="klik"><a class="btn  btn-xs" href="{{route('mal.index')}}">ZAKAT SEKARANG</a></td></tr>
</table>
</p>
</div> 
</div> 
<div class="accordion-section">
<a class="accordion-section-title taborange2" href="#accordion-2"><span class="iconpasar"></span>ZAKAT PERDAGANGAN</a>
<div id="accordion-2" class="accordion-section-content">
<p>
<table>
<tr><td class="od">Modal yang Diputar Selama 1 Tahun</td></tr>
<tr><td><input type="text" name="fmod" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td></tr>
<tr><td class="od">Keuntungan Selama 1 Tahun</td></tr>
<tr><td><input type="text" name="fke" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td></tr>
<tr><td class="od">Piutang Dagang</td></tr>
<tr><td><input type="text" name="fpd" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td></tr>
<tr><td class="od">Hutang Jatuh Tempo</td></tr>
<tr><td><input type="text" name="fhj" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td></tr>
<tr><td class="od">Kerugian Selama 1 Tahun</td></tr>
<input type="hidden" name="fu" class="fieldzakat" value="0" readonly="readonly">
<tr><td><input type="text" name="fkrg" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td></tr>
<tr><td class="od">Harga Emas Saat Ini</td></tr>
<tr><td><input type="text" class="isian" value="550.235" onchange="calc_emas()" readonly="readonly"></td></tr>
<tr><td class="totallabel">NISHAB (85 gram)</td></tr>
<tr><td><input type="text" onchange="calc_emas()" value="46.769.961" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">WAJIB MEMBAYAR ZAKAT PERDAGANGAN</td></tr>
<tr><td><input type="text" name="wajibzu" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">JUMLAH ZAKAT PERDAGANGAN</td></tr>
<tr><td><input type="text" name="fzu" class="isian" value="0" size="12" readonly="readonly">
<input name="zakat" value="850000" type="hidden"></td></tr>
<tr><td align="center" class="klik"><a class="btn btn-xs" href="{{route('mal.index')}}">ZAKAT SEKARANG</a></td></tr>
</table>
</p>
</div> 
</div> 
<div class="accordion-section">
<a class="accordion-section-title taborange3" href="#accordion-3"><span class="iconemas"></span>ZAKAT EMAS</a>
<div id="accordion-3" class="accordion-section-content">
<p>
<table>
<tr><td class="od">Jumlah Emas yang Dimiliki dalam Gram</td></tr>
<tr><td><input type="text" name="ems" class="isian" onkeyup="Angka(this);Nol(this);calc_emas()" value="0" placeholder="0"></td></tr>
<tr><td class="od">Harga Emas Saat Ini</td></tr>
<tr><td><input type="text" name="hms" class="isian" value="550.235" onchange="calc_emas()" readonly="readonly"></td></tr>
<input type="hidden" name="tms" class="fieldzakat" value="0" readonly="readonly">
<tr><td class="totallabel">NISHAB (85 gram)</td></tr>
<tr><td><input type="text" name="nise" onchange="calc_emas()" value="46.769.961" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">WAJIB MEMBAYAR ZAKAT EMAS</td></tr>
<tr><td><input type="text" name="wajibze" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">JUMLAH ZAKAT EMAS</td></tr>
<tr><td><input type="text" name="zems" class="isian" value="0" readonly="readonly"></td></tr>
<tr><td align="center" class="klik"><a class="btn btn-xs" href="{{route('mal.index')}}">ZAKAT SEKARANG</a></td></tr>
</table>
</p>
</div> 
</div> 
<div class="accordion-section">
<a class="accordion-section-title taborange4" href="#accordion-4"><span class="icongedung"></span>ZAKAT TABUNGAN</a>
<div id="accordion-4" class="accordion-section-content">
<p>
<table>
<tr><td class="od">Saldo Tabungan</td></tr>
<tr><td><input type="text" name="fa" onkeyup="Angka(this);Nol(this);calc_simpanan()" class="isian" value="0" placeholder="0"></td></tr>
<input type="hidden" name="ff" class="fieldzakat" value="0" readonly="readonly">
<tr><td class="od">Bagi Hasil <font color="#ed710f">*)</font></td></tr>
<tr><td><input type="text" name="fg" onkeyup="Angka(this);Nol(this);calc_simpanan()" class="isian" value="0" placeholder="0"></td></tr>
<input type="hidden" name="fh" class="fieldzakat" value="0" readonly="readonly">
<tr><td class="od">Harga Emas Saat Ini</td></tr>
<tr><td><input type="text" class="isian" value="550.235" onchange="calc_emas()" readonly="readonly"></td></tr>
<tr><td class="totallabel">NISHAB (85 gram)</td></tr>
<tr><td><input type="text" onchange="calc_emas()" value="46.769.961" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">WAJIB MEMBAYAR ZAKAT TABUNGAN</td></tr>
<tr><td><input type="text" name="wajibzs" class="isian" readonly="readonly"></td></tr>
<tr><td class="totallabel">JUMLAH ZAKAT TABUNGAN</td></tr>
<tr><td><span class="total"><input type="text" name="z1" class="fieldzakat isian" value="0" readonly="readonly"></span></td></tr>
<tr><td><font color="#ed710f">*) Zakat hanya bisa dikeluarkan dari hasil investasi yang halal</font></td></tr>
<tr><td align="center" class="klik"><a class="btn btn-xs" href="{{route('mal.index')}}">ZAKAT SEKARANG</a></td></tr>
</table>
</p>
</div> 
</div> 
<input type="hidden" name="fz" value="550.235">
<input type="hidden" name="nisab" value="46769961.349466">
</div> 
</div>
</form>
<h5 style="text-align: center;margin-top: 20px;">-- <a target="_blank" href="{{url('/info')}}">Info</a> --</h5>

<!-- Mirrored from www.rumahzakat.org/kalkulator-zakat/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2017 07:09:38 GMT -->
</html>
<script>
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('6 w(){0 k=7(b.9.r.5.4(\',\').1(""));0 l=2.3("a://d.g/h/i/t-e-x?c="+k,\'f\');l.8()}6 u(){0 o=7(b.9.s.5.4(\',\').1(""));0 m=2.3("a://d.g/h/i/v-e-G?c="+o,\'f\');m.8()}6 E(){0 j=7(b.9.F.5.4(\',\').1(""));0 n=2.3("a://d.g/h/i/D-e-y?c="+j,\'f\');n.8()}6 C(){0 q=7(b.9.z.5.4(\',\').1(""));0 p=2.3("a://d.g/h/i/B-e-A?c="+q,\'f\');p.8()}',43,43,'var|join|window|open|split|value|function|parseInt|focus|Kalkulator|http|document|refnominal|sharinghappiness|zakat|_blank|org|kampanye|show|kk2|kirimna|win|win1|win2|kk1|win3|kk3|z2|fzu|32|doDagang|20|doSend|profesi|emas|z1|tabungan|79|doNabung|22|doEmas|zems|perdagangan'.split('|'),0,{}))
</script>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection