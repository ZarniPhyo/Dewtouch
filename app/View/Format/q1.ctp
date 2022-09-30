
<div id="message1">

<?php echo $this->Form->create('Type',array('id'=>'form_type','type'=>'file','class'=>'','method'=>'POST','autocomplete'=>'off','inputDefaults'=>array(
				
				'label'=>false,'div'=>false,'type'=>'text','required'=>false)))?>
	
<?php echo __("Hi, please choose a type below:")?>
<br><br>

<?php $options_new = array(
 		'Type1' => __('<span class="mouseovertip" data-id="dialog_1" style="color:blue">Type1</span>
				<div id="dialog_1" class="hide tooltipCustom" title="Type 1">
 					<span>
						<ul><li>Description .......</li>
						<li>Description 2</li></ul>
					</span>
 				</div>'),
		'Type2' => __('<span class="mouseovertip" data-id="dialog_2" style="color:blue">Type2</span>
				<div id="dialog_2" class="hide tooltipCustom" title="Type 2">
 					<span>
						<ul><li>Desc 1 .....</li>
 						<li>Desc 2...</li></ul>
					</span>
 				</div>')
		);?>

<?php echo $this->Form->input('type', array('legend'=>false, 'type' => 'radio', 'options'=>$options_new,
'before'=>'<label class="radio line notcheck">',
'after'=>'</label>' ,
'separator'=>'</label><label class="radio line notcheck">')
);?>

<?php echo $selectedId = null; ?>

<?php echo
	$this->Html->link(
		'Save',
		array(
			'controller' => 'Selection',
			'action' => 'selection', 
			// need to set javascript value back into php
			$selectedId == null ? 'empty' : $selectedId
		),
		array('class' => 'btn btn-primary')
	)
?>

<?php echo $this->Form->end();?>

</div>

<style>
.mouseovertip:hover{
	text-decoration: underline;
}

.mouseovertip{
	position: relative;
}

.tooltipCustom {
	width: 20%;
	background-color: #000000a6;
	color: #fff;
	text-align: center;
	padding: 5px;
	border-radius: 6px !important;
	
	position: absolute;
	z-index: 1;
}

#message1 .radio{
	vertical-align: top;
	font-size: 13px;
}

.control-label{
	font-weight: bold;
}

.wrap {
	white-space: pre-wrap;
}

</style>

<?php $this->start('script_own')?>
<script>

$(document).ready(function(){
	$(".dialog").dialog({
		autoOpen: false,
		width: '500px',
		modal: true,
		dialogClass: 'ui-dialog-blue'
	});

	
	$(".mouseovertip").click(function(){ 
		var id = $(this).data('id'); 
		// $("#"+id).dialog('open');
		$selectedId = $("#"+id).text();

		console.log($selectedId);
	});

	$('.mouseovertip').mouseover(function(){
		var id = $(this).data('id'); 
		$("#"+id).show();
	});

	$('.mouseovertip').mouseout(function(){
		var id = $(this).data('id'); 
		$("#"+id).hide();
	});

})


</script>
<?php $this->end()?>