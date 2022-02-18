<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <title>PRINT INVOICE - {{$data['invoice']->id}}</title>
    <meta name="generator" content="https://conversiontools.io" />
    <meta name="author" content="Jean-Philippe"/>
    <meta name="created" content="2019-11-03T13:51:55"/>
    <meta name="changedby" content="Jean-Philippe"/>
    <meta name="changed" content="2022-02-10T17:04:37"/>
    <meta name="AppVersion" content="16.0300"/>
    <meta name="DocSecurity" content="0"/>
    <meta name="HyperlinksChanged" content="false"/>
    <meta name="LinksUpToDate" content="false"/>
    <meta name="ScaleCrop" content="false"/>
    <meta name="ShareDoc" content="false"/>
    <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('static/favicon.ico') }}" type="image/x-icon">

    <style type="text/css">
        body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial Narrow"; font-size:x-small }
        a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
        a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
        comment { display:none;  } 
    </style>
</head>

<body>

<center>

<table  class="display" cellspacing="0" border="0" id="table">
    <colgroup width="446"></colgroup>
    <colgroup width="50"></colgroup>
    <colgroup width="46"></colgroup>
    <colgroup width="74"></colgroup>
    <colgroup width="80"></colgroup>
    <colgroup width="41"></colgroup>
    <colgroup width="91"></colgroup>
    <tr>
        <?php $data['getsuppinfos'] = DB::select('select * from suppliers where id='.$data['invoice']->supplier_id);?>
        <?php $data['getcustinfos'] = DB::select('select * from customers where id='.$data['invoice']->customer_id);?>
        <td rowspan=5 height="110" align="left" valign=bottom><font face="Arial Narrow"><br><img src="{{$data['getsuppinfos'][0]->logo}}" width=98 height=100 hspace=174 vspace=7>
        </font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">FACTURE N&deg;{{$data['invoice']->id}}</font></b></td>
        </tr>
    <tr>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        </tr>
    <tr>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;0%"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
    </tr>
    <tr>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;0%"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
    </tr>
    <tr>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;0%"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
    </tr>
    <tr>
        
        <td height="20" align="left" valign=bottom><b><font face="Arial Narrow">{{$data['getsuppinfos'][0]->vendor_name}}</font></b></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 rowspan=2 align="left" valign=middle><b><font face="Arial Narrow" size=3>{{$data['getsuppinfos'][0]->fname}}</font></b></td>
        </tr>
    <tr>

        <td height="20" align="left" valign=bottom><font face="Arial Narrow">{{$data['getsuppinfos'][0]->vendor_name}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">{{$data['getsuppinfos'][0]->addr1}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 align="left" valign=middle><font face="Arial Narrow">{{$data['getcustinfos'][0]->nom_complete}}</font></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">{{$data['getsuppinfos'][0]->city}} || {{$data['getsuppinfos'][0]->zipcode}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 align="left" valign=middle><font face="Arial Narrow">{{$data['getcustinfos'][0]->zipcode}} - {{$data['getcustinfos'][0]->city}}</font></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">T&eacute;{{$data['getsuppinfos'][0]->tele}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">{{$data['getsuppinfos'][0]->email}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 align="left" valign=middle><font face="Arial Narrow">Tel: {{$data['getcustinfos'][0]->mobile}}</font></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">N&deg; SIRET : {{$data['getsuppinfos'][0]->n_siret}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 align="left" valign=middle><font face="Arial Narrow">Email: {{$data['getcustinfos'][0]->email}}</font></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">N&deg; TVA Intracommunautaire : {{$data['getsuppinfos'][0]->n_immatriculation}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>

        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">Code NAF : {{$data['getsuppinfos'][0]->c_naf}}</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">RCS : {{$data['getsuppinfos'][0]->rcs}}</font></td>
      
    </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow">Capital : {{$data['getsuppinfos'][0]->capital}} &euro;</font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td colspan=4 align="left" valign=middle><font face="Arial Narrow">{{$data['getsuppinfos'][0]->country}}, le <?php echo date("d-m-Y");?></font></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;0%"><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=bottom sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="22" align="left" valign=middle><b><font face="Arial Narrow">Libell&eacute;</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><b><font face="Arial Narrow">R&eacute;f&eacute;rence  </font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><b><font face="Arial Narrow">Conditions de r&egrave;glement</font></b></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="32" align="left" valign=middle><font face="Arial Narrow">{{$data['invoice']->f_libelle}}</font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=middle><font face="Arial Narrow"></font>{{$data['invoice']->reference}}</td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><font face="Arial Narrow">{{$data['invoice']->condition}}</font></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" height="22" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><font face="Arial Narrow"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><font face="Arial Narrow"><br></font></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><font face="Arial Narrow"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="22" align="center" valign=middle><b><font face="Arial Narrow">D&eacute;signation</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial Narrow">U</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial Narrow">Qt&eacute;</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">PU HT</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">TOTAL HT</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow">%</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">M. factur&eacute;</font></b></td>
    </tr>

    <tr>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="22" align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="17" align="left" valign=middle><b><u><font face="Arial Narrow"><center>*-* DESCRIPTION DES TRAVAUX *-*: </center></font></u></b></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><font face="Arial Narrow"><br></font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><font face="Arial Narrow"><br></font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;0%"><font face="Arial Narrow"><br></font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"><br></font></td>
    </tr>


    
 @foreach ($data['products'] as $key => $prod)
    <tr>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="17" align="left" valign=middle><font face="Arial Narrow">3.0.0.{{ ++$key }} || <b>{{ $prod->designation }}</b></font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Arial Narrow">{{ $prod->uml }}</font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="35.75" sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><font face="Arial Narrow">{{ $prod->qte }} </font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow"></font>{{ $prod->p_u }} euro</td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow">{{ $prod->p_t }} &euro;</font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;0;0%"><font face="Arial Narrow">100%</font></td>
        <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><font face="Arial Narrow">0.00 &euro;</font></td>
    </tr>
    @endforeach


<!-- SPACE ROWS -->
    <tr>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="22" align="left" valign=middle><font face="Arial Narrow" color="#000000"><br></font></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td height="22" align="left" valign=middle><font face="Arial Narrow" color="#000000"><br></font></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;#,##0.00_ ;[RED]-#,##0.00 "><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000" align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
<!--END ROWS-->


    <tr>
        <td height="22" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle><b><font face="Arial Narrow">TOTAL &euro; H.T.</font></b></td>
        <td rowspan=2 align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=middle sdval="0" sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">{{$data['invoice']->total_ht}} &euro;</font></b></td>
    </tr>
    <tr>
        <td height="22" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        </tr>
    <tr>
        <td height="22" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font face="Arial Narrow">MONTANT &euro; H.T.</font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">0.00 &euro;</font></b></td>
    </tr>
    <tr>
        <td height="22" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font face="Arial Narrow"> TVA 0%</font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">0.00 &euro;</font></b></td>
    </tr>
    <tr>
        <td height="22" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font face="Arial Narrow">MONTANT &euro; T.T.C.</font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="0" sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow">0.00 &euro;</font></b></td>
    </tr>
    <tr>
        <td height="22" align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><font face="Arial Narrow"><br></font></td>
        <td align="left" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000" align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000" align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td style="border-top: 1px solid #000000" align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td colspan=2 height="22" align="left" valign=bottom><u><font face="Arial Narrow">R&egrave;glement par virement bancaire :</font></u></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td colspan=2 rowspan=4 height="88" align="left" valign=middle><font face="Arial Narrow">{{$data['getsuppinfos'][0]->vendor_name}}<br>Banque : {{$data['getsuppinfos'][0]->bank}}<br>IBAN : 00000000<br>BIC : {{$data['getsuppinfos'][0]->bic}}</font></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td height="22" align="left" valign=bottom><u><font face="Arial Narrow"><br></font></u></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;0%"><b><font face="Arial Narrow"><br></font></b></td>
        <td align="center" valign=middle sdnum="1033;0;#,##0.00 &quot;&euro;&quot;;[RED]-#,##0.00 &quot;&euro;&quot;"><b><font face="Arial Narrow"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #ff0000" colspan=7 rowspan=4 height="88" align="left" valign=middle><font face="Arial Narrow" size=1 color="#000000">CLAUSE DE R&Eacute;SERVE DE PROPRI&Eacute;T&Eacute; : Conform&eacute;ment &agrave; la loi 80.335 du 12 mai 1980, nous r&eacute;servons la propri&eacute;t&eacute; des produits et marchandises, objets des pr&eacute;sents d&eacute;bits, jusqu'au paiement de l'int&eacute;gralit&eacute; du prix et de ses accessoires. En cas de non-paiement total ou partiel du prix de l'&eacute;ch&eacute;ance pour quelque cause que ce soit, de convention expresse, nous nous r&eacute;servons la facult&eacute;, sans formalit&eacute;, de reprendre mat&eacute;riellement possession de ces produits ou marchandises &agrave; vos frais, risques et p&eacute;rils.<br>P&eacute;nalit&eacute; de retard : 3 fois le taux d'int&eacute;r&ecirc;t l&eacute;gal apr&egrave;s date &eacute;ch&eacute;ance. Escompte pour r&egrave;glement anticip&eacute; : 0% (sauf condition particuli&egrave;re d&eacute;finie dans les conditions de r&egrave;glement)<br>Le montant de l'indemnit&eacute; forfaitaire pour frais de recouvrement pr&eacute;vue en douzi&egrave;me alin&eacute;a de l'article L441-6 est fix&eacute; &agrave; 40 &euro; en mati&egrave;re commerciale.</font></td>
        </tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>
