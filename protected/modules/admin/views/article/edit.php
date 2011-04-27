<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>修改文章分类</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php $form=$this->beginWidget('CActiveForm'); ?>
            <table class="setting">
                <tr>
                    <td><?php echo $form->labelEx($model, 'title'); ?></td>
                    <td><?php echo $form->textField($model, 'title',array('maxlength'=>255,'class'=>'text-input small-input')); ?>
                    <?php echo $form->error($model,'title'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'cat_id');?></td>
                    <td><?php echo $form->dropDownList($model, 'cat_id', $catelist, array('empty'=>'顶级分类','id'=>'cat_id'));?>
                    <?php echo $form->error($model,'cat_id'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'order');?></td>
                    <td><?php echo $form->textField($model, 'order', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model,'order'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'linkurl');?></td>
                    <td><?php echo $form->textField($model, 'linkurl', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model,'linkurl'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'description');?></td>
                    <td><?php echo $form->textArea($model, 'description', array('class'=>'text-input textarea','cols'=>50, 'rows'=>3));?>
                    <?php echo $form->error($model,'description'); ?></td>
                </tr>
                 <tr>
                    <td></td>
                    <td><input class="button" type="submit" value="修改" /></td>
                </tr>
            </table>
            <?php $this->endWidget();?>
		</div>
	</div>
</div>
<div class="clear"></div>
