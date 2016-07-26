
<a id="step" href="#summary">
    <div class="progress">
    <div class="progress-bar progress-bar-warning" style="width: 35%">
        <span>Diagnostics</span>
    </div>
    <div class="progress-bar progress-bar-danger" style="width: 35%">
        <span>Treatment</span>
    </div>
    <div class="progress-bar progress-bar-success" style="width: 30%">
        <span>Recovery</span>
    </div>
    </div>
</a>

<div id="summary" class="jumbotron">
  <h1>Diagnostic Testing</h1>
  <p>...</p>
  <p><a href="#accordion" class="btn btn-primary btn-lg" role="button">Learn more</a></p>
</div>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Diagnostics (Information)
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
          <h3 id="details">Best Practice Guidelines</h3>

            Most breast cancers are ductal carcinomas, which begin in the lining of the milk ducts in breast tissue. Ductal carcinomas can be further classified as follows:

            <ul>
                <li>Ductal carcinoma in situ - cancerous cells have not spread beyond the lining of the milk ducts, and;</li>
                <li>Invasive ductal carcinoma - cancerous cells in the milk ducts have spread to surrounding tissue.</li>
            </ul>

            <img src="https://d38okfhwhefcep.cloudfront.net/mediaLibrary/images/large/cia016_breast_anatomy_img_au.large.jpg" 
                class="img-rounded"/>
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Experiences (Patient Comments)
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
            <ul class="nav">
            <?php foreach ($records as $record) : ?>
                <li>
                    <img src="https://randomuser.me/api/portraits/med/women/<?php echo rand(0, 80) ?>.jpg" 
                        class="img-circle pull-left" style="padding-right: 20px" />
                    <span class="label label-default"><?php echo $record['name'] ?></span> <br />
                    <?php echo $record['content'] ?>
                    <div class="clearfix"></div>
                </li>
            <?php endforeach ?>
            <ul>
      </div>
    </div>
  </div>
</div>