<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>ReadMe Generator</title>
      <link
         href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         rel="stylesheet"
      />
      <link href="" rel="stylesheet" />
      <script
         src="https://code.jquery.com/jquery-1.12.4.min.js"
         integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
         crossorigin="anonymous"
      ></script>
      <script src="repeater.js" type="text/javascript"></script>
      <script
         type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
      ></script>
      <style>
         body {
             background-color: #eee
         }

         .form-control:focus {
             color: #495057;
             background-color: #fff;
             border-color: #80bdff;
             outline: 0;
             box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25)
         }

         .btn-secondary:focus {
             box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
         }

         .close:focus {
             box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
         }

         .mt-200 {
             margin-top: 200px
         }
      </style>
   </head>
   <body oncontextmenu="return false" class="snippet-body">
      <link
         href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css"
         rel="stylesheet"
         type="text/css"
      />
      <link
         href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css"
         rel="stylesheet"
         type="text/css"
      />
      <script
         src="https://code.jquery.com/jquery-1.12.4.min.js"
         integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
         crossorigin="anonymous"
      ></script>
      <script src="repeater.js" type="text/javascript"></script>
      <script
         type="text/javascript"
         src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"
      ></script>
      <div class="container">
         <div class="row d-flex justify-content-center mt-200">
            <button
               type="button"
               class="btn btn-primary"
               data-toggle="modal"
               data-target="#exampleModal"
            >
               Launch multistep Wizard
            </button>
         </div>
         <!-- Modal -->
         <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
         >
            <div
               class="modal-dialog modal-lg modal-dialog-centered"
               role="document"
            >
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">
                        Smart Wizard modal
                     </h5>
                     <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                     >
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div id="smartwizard">
                        <ul>
                           <li>
                              <a href="#step-1"
                                 >Step 1<br /><small>Account Info</small></a
                              >
                           </li>
                           <li>
                              <a href="#step-2"
                                 >Step 2<br /><small>Work</small></a
                              >
                           </li>
                           <li>
                              <a href="#step-3"
                                 >Step 3<br /><small>Skills</small></a
                              >
                           </li>
                           <li>
                              <a href="#step-4"
                                 >Step 4<br /><small>Confirm details</small></a
                              >
                           </li>
                        </ul>
                        <div class="mt-4">
                           <div id="step-1">
                              <div class="row">
                                 <div class="col-md-12">
                                    <h5>Personal Details :</h5>
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       name="first_name"
                                       placeholder="First Name"
                                       required
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="last_name"
                                       placeholder="Last name"
                                       required
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Headline"
                                       required
                                    />
                                 </div>
                              </div>
                              <br />
                              <div class="row">
                                 <div class="col-md-12">
                                    <h5>Social Media Handels :</h5>
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Github Username"
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="LinkedIn Username"
                                    />
                                 </div>
                                 <br />
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Twitter Username"
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Facebook Username"
                                    />
                                 </div>
                                 <br />
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Instagram Username"
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="HackerRank Username"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="YouTube channel name"
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Other"
                                    />
                                 </div>
                              </div>
                           </div>

                           <div id="step-2">
                              <div class="row">
                                 <div class="col-md-12">
                                    <h5>🔭 I’m currently working on :</h5>
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Project Name"
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Project Link"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <h5>👯 I’m looking to collaborate on :</h5>
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Project Name"
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Project Link"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <h5>🤝 I’m looking for help with :</h5>
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Project Name"
                                    />
                                 </div>
                                 <div class="col-md-6">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Project Link"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <h5>🌱 I’m currently learning :</h5>
                                 </div>
                                 <div class="col-md-12">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Frameworks/courses etc"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <h5>💬 Ask me about :</h5>
                                 </div>
                                 <div class="col-md-12">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="this specialized fields"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <h5>✉ How to reach me :</h5>
                                 </div>
                                 <div class="col-md-12">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="example@gmail.com"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <h5>
                                       👨‍💻 All of my projects are available at :
                                    </h5>
                                 </div>
                                 <div class="col-md-12">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Portfolio Link"
                                    />
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-12">
                                    <h5>📄 Know about my experiences :</h5>
                                 </div>
                                 <div class="col-md-12">
                                    <input
                                       type="text"
                                       class="form-control"
                                       placeholder="Resume Link"
                                    />
                                 </div>
                              </div>
                           </div>

                           <div id="step-3" class="">
                              <div class="container">
                                 <br />
                                 <h3 align="center">
                                    Add Remove Dynamic HTML Fields using JQuery
                                    Plugin in PHP
                                 </h3>
                                 <br />
                                 <div
                                    style="width:100%; max-width: 600px; margin:0 auto;"
                                 >
                                    <div class="panel panel-default">
                                       <div class="panel-heading">
                                          Add Programming Skill Details
                                       </div>
                                       <div class="panel-body">
                                          <span id="success_result"></span>
                                          <form
                                             method="post"
                                             id="repeater_form"
                                          >
                                             <div class="form-group">
                                                <label
                                                   >Enter Programmer Name</label
                                                >
                                                <input
                                                   type="text"
                                                   name="name"
                                                   id="name"
                                                   class="form-control"
                                                   required
                                                />
                                             </div>
                                             <div id="repeater">
                                                <div
                                                   class="repeater-heading"
                                                   align="right"
                                                >
                                                   <button
                                                      type="button"
                                                      class="
                                                         btn btn-primary
                                                         repeater-add-btn
                                                      "
                                                   >
                                                      Add More Skill
                                                   </button>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div
                                                   class="items"
                                                   data-group="programming_languages"
                                                >
                                                   <div class="item-content">
                                                      <div class="form-group">
                                                         <div class="row">
                                                            <div
                                                               class="col-md-9"
                                                            >
                                                               <label
                                                                  >Select
                                                                  Programming
                                                                  Skill</label
                                                               >
                                                               <input
                                                                  type="text"
                                                                  data-skip-name="true"
                                                                  data-name="skill[]"
                                                                  class="
                                                                     form-control
                                                                  "
                                                                  placeholder="Programming Languages"
                                                               />
                                                            </div>
                                                            <div
                                                               class="col-md-3"
                                                               style="margin-top:24px;"
                                                               align="center"
                                                            >
                                                               <button
                                                                  id="remove-btn"
                                                                  onclick="$(this).parents('.items').remove()"
                                                                  class="
                                                                     btn
                                                                     btn-danger
                                                                  "
                                                               >
                                                                  Remove
                                                               </button>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="clearfix"></div>
                                             <div
                                                class="form-group"
                                                align="center"
                                             >
                                                <br /><br />
                                                <input
                                                   type="submit"
                                                   name="insert"
                                                   class="btn btn-success"
                                                   value="insert"
                                                />
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div id="step-4" class="">
                              <div class="row">
                                 <div class="col-md-12">
                                    <span
                                       >Thanks For submitting your details with
                                       BBBootstrap.com. we will send you a
                                       confirmation email. We will review your
                                       details and revert back.</span
                                    >
                                 </div>
                              </div>
                              <input type="submit">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script
         type="text/javascript"
         src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
      ></script>
      <script type="text/javascript">
         $(document).ready(function(){

         $('#smartwizard').smartWizard({
         selected: 0,
         theme: 'arrows',
         autoAdjustHeight:true,
         transitionEffect:'fade',
         showStepURLhash: false,

         });

         });
      </script>
      <script>
         $(document).ready(function(){

             $('#repeater').createRepeater();

             $('#repeater_form').on('submit', function(event){
                 event.preventDefault();
                 $.ajax({
                     url:"insert.php",
                     method:"POST",
                     data:$(this).serialize(),
                     success:function(data)
                     {
                         $('#repeater_form')[0].reset();
                         $('#repeater').createRepeater();
                         $('#success_result').html(data);
                     }
                 })
             });

         });
      </script>
   </body>
</html>
