
<h2 class="text-center">Your patient journey</h2>

<a href="#summary">
  <img class="full" src="/images/journey-1.png"/>
</a>

<h2 class="text-center">Please select which stage you are in your journey</h2>

<a href="#details">
  <div id="summary">
  
  <h2 class="text-center">1. Diagnosis</h2>
  <img class="full" src="/images/diagnosis-1.png" />
</div>
</a>


  <h2 id="details" class="text-center">EviQ/Trail Protocol</h2>
    
  <img src="/images/diagnosis-2.png" class="full"/>

  <h2 id="details" class="text-center">Events: </h2>

  <ul class="nav">
    <li style="border-bottom: 1px solid lightgray; font-size: 20pt">
      <div style="background: #50D2C2; width: 80px; height: 50px; float: left">
        <i class="fa fa-check fa-2x" style="margin: auto; padding: 20px 10px"></i>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;
      Pack clothes
      <div class="clearfix"></div>
    </li>
    <li style="border-bottom: 1px solid lightgray; font-size: 20pt">
      <div style="background: white; width: 80px; height: 50px; float: left">
        
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;
      Read guideline to surgery
      <div class="clearfix"></div>
    </li>
  <ul>


  <h2 class="text-center">Experiences (Patient Comments)</h2>

    <ul class="nav">
    <?php foreach ($records as $record) : ?>
    <?php if (!empty($record['content'])) : ?>
        <li>
            <img src="https://randomuser.me/api/portraits/med/women/<?php echo rand(0, 80) ?>.jpg" 
                class="img-circle pull-left" style="padding-right: 20px" />
            <span class="label label-default"><?php echo (!empty($record['name']) ? $record['name'] : '') ?></span> <br />
            <?php echo $record['content'] ?>
            <div class="clearfix"></div>
        </li>
        <?php endif ?>
    <?php endforeach ?>
    <ul>

</div>