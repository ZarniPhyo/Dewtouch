<div class="alert  ">
<button class="close" data-dismiss="alert"></button>
Question: Advanced Input Field</div>

<p>
1. Make the Description, Quantity, Unit price field as text at first. When user clicks the text, it changes to input field for use to edit. Refer to the following video.

</p>


<p>
2. When user clicks the add button at left top of table, it wil auto insert a new row into the table with empty value. Pay attention to the input field name. For example the quantity field

<?php echo htmlentities('<input name="data[1][quantity]" class="">')?> ,  you have to change the data[1][quantity] to other name such as data[2][quantity] or data["any other not used number"][quantity]

</p>



<div class="alert alert-success">
<button class="close" data-dismiss="alert"></button>
The table you start with</div>

<table class="table table-striped table-bordered table-hover">
<thead>
<th><span id="add_item_button" class="btn mini green addbutton" onclick="addObject">
											<i class="icon-plus"></i></span></th>
<th>Description</th>
<th>Quantity</th>
<th>UOM</th>
<th>Unit Price</th>
<th>Amount</th>
</thead>

<tbody>
<?php
foreach ($dataList as $data) :
?>
	<tr>
		<td></td>
		<td class="editableCell">
			<textarea name="data[1][description]" class="m-wrap edit description required" rows="2" ></textarea>
			<span class="nonedit">
				<?php echo $data['Product']['description']; ?>
			</span>
		</td>
		<td><input name="data[1][quantity]" class="">
			<span class="nonedit">
				<?php echo $data['Product']['quantity']; ?>
			</span>
		</td>
		<td><input name="data[1][uom]" class="">
			<span class="nonedit">
				<?php echo $data['Product']['uom']; ?>
			</span>
		</td>
		<td><input name="data[1][unit_price]"  class="">
			<span class="nonedit">
				<?php echo $data['Product']['unit_price']; ?>
			</span>
		</td>
		<td><input name="data[1][amount]" class="">
			<span class="nonedit">
				<?php echo $data['Product']['amount']; ?>
			</span>
		</td>
</tr>
<?php
endforeach;
?>

</tbody>

</table>


<p></p>
<div class="alert alert-info ">
<button class="close" data-dismiss="alert"></button>
Video Instruction</div>

<p style="text-align:left;">
<video width="78%"   controls>
  <source src="<?php echo Router::url("/video/q3_2.mov") ?>">
Your browser does not support the video tag.
</video>
</p>





<?php $this->start('script_own');?>
<script>
$(document).ready(function(){

	$("#add_item_button").click(function(){

		$dataList.push({});
		

	});

	$(".editableCell").click(function(){ 
		var id = $(this).data('description'); 
		// $("#"+id).dialog('open');
		$selectedId = $(this).text();

		console.log($selectedId);
	});

	
});
</script>
<?php $this->end();?>

