<link rel="stylesheet" href="{$TPL_SD_CSS}tickets.css" media="screen" />
<div id="page">
    
    {if !$Error}
		{if !$smarty.get.idCourrier and !$smarty.get.idTicket}
		<h2>Mes Courriers</h2>
			<div class="tab-container">
				<div class="onglet {if $etatCourrier==0}actif{/if}"><a href="?p=Courriers&eC=0"><p>Courriers non lus</p></a></div>
				<div class="onglet {if $etatCourrier==1}actif{/if}"><a href="?p=Courriers&eC=1"><p>Courriers lus</p></a></div>
				<div class="onglet {if $etatCourrier==2}actif{/if}"><a href="?p=Courriers&eC=2"><p>Courriers archivés</p></a></div>
				{if $smarty.const.TICKETLAUNCH==1}
					<div class="onglet {if $etatCourrier==3}actif{/if}"><a href="?p=Courriers&eC=3"><p>Mes tickets {if $nbrNonLu>0}<span class="badge">{$nbrNonLu}</span>{/if}</p></a></div>
				{/if}
			</div>
			<fieldset>
				{if $smarty.get.eC!=3}
					{if $Courriers|@count>0}
						<table class="listeCourriers">
							<thead>
								<tr>
									<th>Date</th>
									<th>Sujet</th>
									{if $etatCourrier==1}<th>Action</th>{/if}
								</tr>
							</thead>
							<tbody>
								{foreach from=$Courriers item=c}
									<tr id="{$c.id}">
										<td><a href="?p=Courriers&idCourrier={$c.id}&eC={$etatCourrier}" {if $c.generer_pdf==1}target="_blank"{/if}>{$c.dateEnvoiFR}</a></td>
										<td><a href="?p=Courriers&idCourrier={$c.id}&eC={$etatCourrier}" {if $c.generer_pdf==1}target="_blank"{/if}>{$c.Titre|utf8_encode}</a></td>
										{if $etatCourrier==1}<td class="text-center"><button type="button" onclick="archiveCourrier(this)" class="btn btn-info">Archiver</button></td>{/if}
									</tr>
								{/foreach}
							</tbody>
						</table>
					{else}
						<div class="alert alert-info alert-bigger">Cette boite est vide</div>
					{/if}
				{else}
					<table class="listeCourriers">
						<thead>
							<tr>
								<th>Date</th>
								<th>Sujet</th>
								<th>Etat</th>
								<th>Détail</th>
							</tr>
						</thead>
						<tbody>
							{foreach from=$tickets item=t}
								<tr id="{$t.id}">
									<td><a href="?p=Courriers&idTicket={$t.id}&eC=3">{$t.dateFR} {$t.HeureFR}</a></td>
									<td><a href="?p=Courriers&idTicket={$t.id}&eC=3">{$t.contenu|utf8_encode}</a></td>
									<td style="text-align:center"><a href="?p=Courriers&idTicket={$t.id}&eC=3">
									{if $t.etat==0}
                                        <span class="label alert-warning">En cours d'affectation</span>
                                    {elseif $t.etat==1}
                                        <span class="label alert-info">Pris en charge par le service compétent</span>
                                    {elseif $t.etat==2}
                                        <span class="label alert-success">Résolu</span>
                                    {/if}
									</a></td>
									<td style="text-align:center"><a href="?p=Courriers&idTicket={$t.id}&eC=3"><img src="./_img/icones/ct.png"></span></a></td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				{/if}
			</fieldset>
		{elseif $smarty.get.idCourrier and !$smarty.get.idTicket}
		<h2>Mes Courriers</h2>
			<fieldset>
				<a href="?p=Courriers&eC={$etatCourrier}" role="button" class="btn btn-success btn-back-courrier">Boite de réception</a>
				<div class="titreCourrier">
					Objet : {$Courrier.Titre|utf8_encode} 
				</div>
				<div class="contenuCourrier">
					{$Courrier.ContenuFROMHTML|@utf8_encode}
				</div>
			</fieldset>
		{elseif !$smarty.get.idCourrier and $smarty.get.idTicket}
		<h2>Détail du Ticket n° {$Ticket.idTicket}</h2>
			<fieldset class="ticket">
			
					<a href="?p=Courriers&eC=3" role="button" class="btn btn-success btn-back-courrier">Revenir à la liste des tickets</a>
					
						
					<div class="contenuTicket">
						<p>Rappel de votre demande :<br /></p>
						<p>{$Ticket.contenu|@utf8_encode}</p>
						<hr />
						<h2>Historique du Ticket n° {$Ticket.idTicket}</h2>
						<section id="cd-timeline">
							<div class="cd-timeline-block">
								<div class="cd-timeline-img timelinecreation">
									{$Ticket.jour}/{if $Ticket.mois<10}0{/if}{$Ticket.mois}
								</div>
						 
								<div class="cd-timeline-content">
									<h2>Création de votre ticket</h2>
									<p>Nous avons bien enregistré votre demande le {$Ticket.dateFR} à {$Ticket.HeureFR}, nos services vous répondrons dans les plus brefs délais</p>
								</div>
							</div>
							{foreach from=$HTickets item=h}
								<div class="cd-timeline-block">
									<div class="cd-timeline-img timeline{$h.detailAction}">
										{$h.jour}/{if $h.mois<10}0{/if}{$h.mois}
									</div>
									<div class="cd-timeline-content">
										{if $h.detailAction=="affectation"}
											<h2>Pris en charge par le service compétent</h2>
											<p>Le service en charge de la résolution du problème rencontré à bien pris en compte votre demande. Vous serez prochainement avertit de la résolution du problème rencontré</p>
										{elseif $h.detailAction=="solution"}
											<h2>Résolution du problème</h2>
											<p>{$h.solution}</p>
										{/if}
									</div>
								</div>
							{/foreach}
						</section>
					</div>
			</fieldset>
		{/if}
    {else}
        <div class='important'><br /><center>{$Error}</center></div>
    {/if}
</div>
{literal}
<script type="text/javascript">
$(document).ready(function($){
	var timelineBlocks = $('.cd-timeline-block'),
		offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}
});
</script>
{/literal}