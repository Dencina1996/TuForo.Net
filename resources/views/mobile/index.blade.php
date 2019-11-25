@extends('mobile.main')

@section('title', 'TuForo.Net - Internet Somos Todos')

@push('styles')
<meta name="keywords" content="TuForo.Net,tuforo,foro,español">
    <meta name="description" content="Bienvenido a TuForo.Net. Aquí encontrarás temas, opiniones y debates sobre temas de todo tipo. Únete a nuestra comunidad.">
	<link rel='stylesheet' type='text/css' href='{{ asset("/css/mobile/index.css") }}'>
@endpush
@push('scripts')
@endpush
@section('postSection')
	<img src="/storage/src/logos/banner100.png" style="display: flex; margin: 1vh auto; width: inherit;">
	<div id="mobileAdsContainerTop">
		<div style="float: left;">
			<!-- TOP LEFT AD CONTAINER (MOBILE INDEX) 300x250 -->
			<amp-ad
			     layout="fixed"
			     width="300"
			     height="250"
			     type="adsense"
			     data-ad-client="ca-pub-2178837299566296"
			     data-ad-slot="5661977290">
			</amp-ad>
		</div>
		<div style="float: right;">
			<!-- TOP RIGHT AD CONTAINER (MOBILE INDEX) 300x250 -->
			<amp-ad
			     layout="fixed"
			     width="300"
			     height="250"
			     type="adsense"
			     data-ad-client="ca-pub-2178837299566296"
			     data-ad-slot="9740823106">
			</amp-ad>
		</div>
	</div>
	<h1 class="contentTitle">Últimos temas</h1>
	<div id="threadsPanel">
		@foreach($threadData as $thread)
		<table class="threadInfo">
		    <tr>
		    	<td class="threadCategory" rowspan="2">
		    	    <img class='categoryPic' src='storage/src/categories/{{ $thread->category }}.png'>
		    	</td>
		        <td class='threadName'>
		            <b>
						<a href="thread/{{ $thread->id }}">{{ $thread->thread }}</a>
		            </b>
		         </td>
		     </tr>
		     <tr>
				<td class='threadStats'>
		            <p>{{ $thread->reply_count }} mensajes. Últ. mens. <label class='threadDate'>{{ date('d/m/Y', strtotime($thread->last_reply_time)) }}</label> ({{ date('H:i', strtotime($thread->last_reply_time)) }}) por {{ $thread->last_reply_user }}</p>
				</td>
			</tr>
		</table>
		@endforeach
		<div style="text-align: center;">
		  <div class="pageSelector">
		    {{$threadData->links()}}
		  </div>
		</div>
	</div>
	<h1 class="contentTitle">Estadísticas</h1>
	<ul id="forumStats">
		<li>Temas: <b>{{ $countThreads }}</b></li>
		<li>Visitas: <b>{{ $countVisitors }}</b></li>
		<li>Miembros: <b>{{$countMembers}}</b></li>
		<li>Mensajes: <b>{{ $countMessages }}</b></li>
		<li>En línea: <b>{{ $countOnline }}</b></li>
	</ul>
	<div id="mobileAdsContainerBottom">
		<div style="float: left;">
			<!-- BOTTOM LEFT AD CONTAINER (MOBILE INDEX) 300x250 -->
			<amp-ad
			     layout="fixed"
			     width="300"
			     height="250"
			     type="adsense"
			     data-ad-client="ca-pub-2178837299566296"
			     data-ad-slot="5313163948">
			</amp-ad>
		</div>
		<div style="float: right;">
			<!-- BOTTOM RIGHT AD CONTAINER (MOBILE INDEX) 300x250 -->
			<amp-ad
			     layout="fixed"
			     width="300"
			     height="250"
			     type="adsense"
			     data-ad-client="ca-pub-2178837299566296"
			     data-ad-slot="4752220307">
			</amp-ad>
		</div>
	</div>
@stop