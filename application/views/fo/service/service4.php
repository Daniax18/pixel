<!DOCTYPE html>
<html lang="en">
<head>
<?php  $this->load->view('fo/content/header'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>    

<style>
    .simple-button {
  display: inline-block; /* Makes the button behave like a block element */
  background-color: white; /* Blue background */
  color: black; /* White text */
  padding: 10px 20px; /* Padding around the text */
  text-align: center; /* Center the text */
  text-decoration: none; /* Removes underline */
  font-size: 16px; /* Text size */
  margin: 4px 2px; /* Margin around the button */
  cursor: pointer; /* Changes cursor to pointer on hover */
  border: none; /* Removes border */
  border-radius: 4px; /* Rounded corners */
  transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

/* Change background color on hover */
.simple-button:hover {
  background-color: black; /* Darker blue on hover */
  color: white;
}

</style>
<body class="hidden hidden-ball smooth-scroll rounded-borders" data-primary-color="#8c6144">
	<main>		
        <!-- Preloader -->
        <?php  $this->load->view('fo/loading'); ?>
        <!--/Preloader -->     
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="clapat-page-content" class="light-content" data-bgcolor="#0c0c0c">
            
        <?php  $this->load->view('fo/content/menu'); ?>
            
             
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">
                    <!-- Hero Section -->
                    <div id="hero" class="has-image autoscroll1">
                        <div id="hero-styles">
                            <div id="hero-caption" class="content-full-width height-title">
                                <div class="inner">   
                                    <h1 class="hero-title caption-timeline primary-font-title"><span>Mon Evolution</span></h1>
                                </div>
                            </div>
                            <div id="hero-description" class="content-full-width">
                                <div class="inner">
                                	<p class="bigger has-opacity">Fais un suivie de ton progres et améliore toi! Tu peux consulter toutes tes points forts et voir ou tu dois encore t'ameliorer.</p>
                                    <br>                                                              
                                    <hr> 
                                </div>
                            </div>
                            <div id="hero-footer">
                            	<div class="hero-footer-left">                                	
                                    <div class="button-wrap right scroll-down">
                                        <div class="icon-wrap parallax-wrap">
                                            <div class="button-icon parallax-element">
                                                <i class="arrow-icon-down"></i>
                                            </div>
                                        </div>
                                        <div class="button-text sticky right"><span data-hover="FAITES DÉFILER POUR EXPLORER">FAITES DÉFILER POUR EXPLORER</span></div> 
                                    </div>	
                                </div>
                            </div>                                    
                        </div>
                    </div>
                    <div id="hero-image-wrapper">
                    	<div id="hero-background-layer" class="parallax-scroll-image">
                            <div id="hero-bg-image" style="background-image:url(<?=base_url("assets/images/progress.jpg")?>)"></div>
                        </div>
                    </div>                        
                    <!--/Hero Section -->    
                         
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <div id="main-page-content">
                            
                        <!-- Row -->
                            <div class="content-row row_padding_top dark-section change-header-color text-align-center" data-bgcolor="#0c0c0c">
                         
                                <h1 class="primary-font-title has-mask-fill">PROGRAMMES</h1>
                                    <p>
                                        <span class="has-opacity">DÉCOUVREZ NOS OPTIONS FLEXIBLES D'APPRENTISSAGE, QUE CE SOIT EN DISTANCIEL OU EN PRÉSENTIEL. </span>
                                        <br class="destroy">
                                        <span class="has-opacity">CHOISISSEZ LE FORMAT QUI VOUS CONVIENT LE MIEUX POUR ATTEINDRE VOS OBJECTIFS DE FORMATION.</span>
                                    </p>
                                    
                                <hr><hr>
                                
                            </div> 
                            <!--/Row -->

                        <!-- Row -->
                        <div class="content-row row_padding_bottom dark-section " data-bgcolor="#0c0c0c">
                                
                            <div class="pinned-section">
                                <div class="scrolling-element left">
                                    <figure class="has-animation">
                                        <a href="#" class="image-link">

                                            <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>

                                                <!-- Use it like any other HTML element -->
                                                <model-viewer 
                                                    style="width: 800px; height: 800px;"  
                                                    src="<?=base_url("assets/status/darna.glb")?>"  
                                                    shadow-intensity="1" 
                                                    camera-controls touch-action="pan-y">
                                                </model-viewer>

                                        </a>
                                    </figure>
                                </div>
                                
                                <div class="pinned-element right">
                                    <h1 class="primary-font-title has-mask-fill">NIVEAU EN <?php echo $client['nom_categorie'] ?> : <?php echo $level['note'] ?> </h1>

                                    <progress id="file" max="200" value="<?php echo $level['note'] ?>" ></progress>
                                <h5> <?php echo $client['nom_client'] ?></h5>
                                <p>Planète : <?php echo $client['nom_pays'] ?></p>
                                <p id="username">Pseudo : </p>
                                <p>Catégorie : <?php echo $client['nom_categorie'] ?></p>
                                <form action="">
                                    <textarea placeholder="Entrez votre histoire" name="pseudo" id="pseudo"></textarea>
                                    <div class="button-box has-animation fadeout-element">             
                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                        <div class="clapat-button parallax-element">
                                            <div class="button-border outline rounded parallax-element-second">
                                                    <input id="generer" type="button" value="Générer Pseudo via IA"></>
                                                </div>
                                        </div>
                                    </div> 
                                </div>
                                </form>
                             <script>
                                function generate(history) {

                                $.ajax({
                                    type: 'GET',
                                    url: 'https://python-njxgrmyrcq-bq.a.run.app/api/v1/generate_pseudo?request='+history,
                                    processData: false,
                                    contentType: false,
                                    crossDomain: true,
                                    success: function(response) {
                                        console.log('API Response:', response.response);
                                        //alert('pseudo: ' +  response.response);
                                        document.getElementById('username').innerHTML="Pseudo : "+response.response;
                                    },
                                    error: function(xhr, status, error) {
                                        console.error('Error calling API:', error);
                                    }
                                });
                                }



                                document.addEventListener("DOMContentLoaded", function() {
                                var genererButton = document.getElementById("generer");
                                genererButton.addEventListener("click", function() {
                                    var historyInput = document.getElementById("pseudo");
                                    var historyValue = historyInput.value;
                                    console.log("History value:", historyValue);
                                    generate(historyValue);
                                    
                                });
                                }); 
                                $(document).ready(function(){
                                let recorder;
                                let chunks = [];

                                $("#startRecord").click(function(){
                                    document.getElementById('startRecord').style.backgroundColor = 'red';
                                    navigator.mediaDevices.getUserMedia({  audio: { volume: 0.9 }})
                                    .then(function(stream) {
                                        recorder = new MediaRecorder(stream);
                                        recorder.ondataavailable = function(e) {
                                            chunks.push(e.data);
                                        };
                                        recorder.onstop = function(e) {
                                            const blob = new Blob(chunks, { 'type' : 'audio/wav; codecs=opus' });
                                            const audioURL = window.URL.createObjectURL(blob);
                                            document.getElementById('audioPlayer').src = audioURL;
                                            
                                            // Send the recorded audio to your API for processing
                                            sendAudioToAPI(blob);
                                        };
                                        recorder.start();
                                        $("#startRecord").prop('disabled', true);
                                        $("#stopRecord").prop('disabled', false);
                                    })
                                    .catch(function(err) {
                                        console.error('Error accessing microphone', err);
                                    });
                                });

                                $("#stopRecord").click(function(){
                                    document.getElementById('startRecord').style.backgroundColor = 'white';
                                    recorder.stop();
                                    chunks = [];
                                    $("#startRecord").prop('disabled', false);
                                    $("#stopRecord").prop('disabled', true);
                                });

                                function sendAudioToAPI(blob) {
                                    const formData = new FormData();
                                    formData.append('audio', blob);

                                    $.ajax({
                                        type: 'POST',
                                        url: 'https://python-njxgrmyrcq-bq.a.run.app/api/v1/generate-history',
                                        data: formData,
                                        processData: false,
                                        contentType: false,
                                        crossDomain: true,
                                        success: function(response) {
                                            console.log('API Response:', response.response);
                                           alert('Transcription: ' +  response.response);
                                           document.getElementById('interpretation').innerHTML=response.response;
                                           document.getElementById('interpretation').style.padding = '15px';
                                        },
                                        error: function(xhr, status, error) {
                                            console.error('Error calling API:', error);
                                        }
                                    });
                                }
                            });
                            </script>
                            <h1>Enregistre ta voix</h1>
                            <div id="controls">
                                <button class="simple-button" id="startRecord">Enregistrer ma voix</button>
                                <button class="simple-button" id="stopRecord" disabled>Interpreter</button>
                            </div>
                            <audio id="audioPlayer" controls class="hidden" ></audio>
                            <div style="width: fit-content; border-radius: 16px; background-color:white;margin-bottom:400px;" data-bgcolor="#fff">
                                <div class="inner">
                                    <p style="font-family: 'Poppins', sans-serif;font-size:15px;" id="interpretation" class="bigger has-opacity"></p>                                                           
                                    <hr> 
                                </div>
                        </div>
                           
                        </div> 
                        <!--/Row -->

                            <!-- Row -->
                            <div class="content-row row_padding_top row_padding_bottom light-section change-header-color has-clip-path" data-bgcolor="#fff">
                                
                                <hr class="destroy"><hr class="destroy">
                                
								
								<div class="pinned-section">
                                    <div class="pinned-element left">
                                        <h2 class="big-title primary-font-title no-margins"><span class="has-mask-fill">Votre 
                                            <?php echo $client['nom_categorie'] ?>
                                        </span><br><span class="has-mask-fill">Programme</span></h2>
                                    </div>
                                    
                                    <div class="scrolling-element right">
                                    	<dl class="accordion has-animation">
											
                                            <div>
                                                <h5>Listes des vos Programmes d'entraînement</h5>
                                            </div>

                                            <div class="text-center" style="width: 100$">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Nom de programme</th>
                                                            <th> Durée </th>
                                                            <th> Statut </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($programmes as $programme){ ?>
                                                            <tr>
                                                                <td><?php echo $programme['dateDebut'] ?></td>
                                                                <td><?php echo $programme['nom_programme'] ?></td>
                                                                <td><?php echo $programme['duree'] ?></td>
                                                                <td>Validé</td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                
                                
                                <hr class="animated-line has-animation"><hr>
                                    <div class="button-box has-animation fadeout-element">             
                                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                                        <div class="clapat-button parallax-element">
                                                            <div class="button-border outline rounded parallax-element-second">
                                                                <a class="" href="<?php echo base_url("fo/evolutionCtrl/pdf") ?>">
                                                                    <span data-hover="Exporter mon certificat">Exporter mon certificat</span>
                                                                    </a>
                                                            </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <hr class="animated-line has-animation"><hr>

                                                            <!-- Row -->
                                            <div>
                                                <h4>Vos compétences actuelles</h4>

                                                <?php foreach($habilities as $h){ ?>
                                                      <div style="height:120px;width:300px;">
                                                      <p><?php echo $h['nom_hability'] ?> : <?php echo $h['note'] ?></p>
                                                      <progress id="file" max="200" value="<?php echo $h['note'] ?>" ></progress>
                                                  </div>
                                                <?php } ?>
                                            </div>
                                            <!--/Row -->
                                            <div class="button-box has-animation fadeout-element">             
                                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                                        <div class="clapat-button parallax-element">
                                                            <div class="button-border outline rounded parallax-element-second">
                                                                <a class="" href="<?php echo base_url("fo/evolutionCtrl/listeProgramme") ?>">
                                                                    <span data-hover="Ajouter un programme">Ajouter un programme</span>
                                                                    </a>
                                                            </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Row -->                                          
                                    	</dl>    
                                    </div>
                                </div>
                                
                               <hr class="destroy">
                                
                            </div> 
                            <!--/Row -->
                            <div class="content-row row_padding_top row_padding_bottom dark-section" data-bgcolor="#0c0c0c">
                                
                                <div class="marquee-text-wrapper">
                                    <h2 class="marquee-text bw big-title primary-font-title">Ameliore vite tes points forts et gagne des XP.</h2>
                                </div>
                                
                                <hr>
                                
                                <div class="marquee-text-wrapper">
                                    <h2 class="marquee-text fw big-title primary-font-title">Travail sur tes défauts pour devenir meilleur.</h2>
                                </div>
                                
                            </div> 
                             <!-- Showcase Slider Holder -->                                                          
                        <div id="itemsWrapperLinks">                               
                            <div id="itemsWrapper" class="webgl-fitthumbs fx-six">
                            
                                    <div class="clapat-slider">
                                        
                                    </div> 
                                    
                                    <div class="gallery-zoom-wrapper"></div>                                    
                                    <div class="gallery-thumbs-wrapper"></div>                                    
                                    <div class="gallery-close-thumbs"></div>
                                                                       
                            </div>
                            	<!--/ClaPat Slider -->
                                
                                
                                
                            </div>                                                           
                        </div>    
                        <!-- Showcase Slider Holder -->

                       
                            
                            <!--/Row -->
                                                                         
                        
                        </div>
                        <!--/Main Page Content --> 
                        
                                                                
                                
                    </div>
                    <!--/Main Content --> 
                </div>
                <!--/Main --> 
                
                
                <!-- Footer -->
                <?php  $this->load->view('fo/content/foot'); ?>
                <!--/Footer -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            <div id="app"></div>
            
		</div>    
        <!--/Page Content -->
    
		</div>
	</main>
    
    
    
   <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
        	<div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
        	<div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image">
    	<div class="hero-translate"></div>
    </div>
    <div id="rotate-device"></div>
    
    
		
    <?php  $this->load->view('fo/content/footer'); ?>


</body>

</html>