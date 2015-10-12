<div class="row">
    <div class="col-md-12 center login-header">
        <h2>欢迎使用 Admin</h2>
    </div>
    <!--/span-->
</div><!--/row-->

<div class="row">
    <div class="well col-md-5 center login-box">
        <div id="topTip" class="alert alert-info">
            <div id="tips">请输入用户名密码</div>
        </div>

        <?php $form = \yii\bootstrap\ActiveForm::begin(['options'=>['class'=>'form-horizontal']]); ?>
        <filedset>
            <?= $form->field($model, 'username', ['options'=>['class'=>'input-group input-group-lg'], 'template'=>"{label}\n{input}", 'inputOptions'=>['placeholder'=>'用户名']])
                ->label('<i class="glyphicon glyphicon-user red"></i>', ['class'=>'input-group-addon']); ?>

            <div class="clearfix"></div><br>

            <?= $form->field($model, 'password', ['options'=>['class'=>'input-group input-group-lg'], 'template'=>"{label}\n{input}", 'inputOptions'=>['placeholder'=>'密码', 'type'=>'password']])
                ->label('<i class="glyphicon glyphicon-lock red"></i>', ['class'=>'input-group-addon']); ?>

            <?= $form->field($model, 'rememberMe', ['options'=>['class'=>'input-prepend']])->checkbox(['value'=>0])->label('记住我', ['class'=>'remember'])?>

            <p class="center col-md-5">
                <button type="submit" class="btn btn-primary">登录</button>
            </p>
        </filedset>
        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
    <!--/span-->
</div><!--/row-->