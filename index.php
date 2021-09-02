<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo_Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>
      <div class="main-container">
              <div class="box-1">
                     <div class="account-pic space-btw">
                           <i class="fas fa-user-circle font_one"></i>
                     </div>
                     <div class="build-pen space-btw">
                          <i class="fas fa-pen font_two "></i>
                          <h3>Builder</h3>
                     </div>
                     <div class="settings space-btw setting">
                           <i class="fas fa-cog font_two"></i>
                           <h3>Settings</h3>
                     </div>
                     <div class="submit space-btw">
                                          <form action="./questionSite.php">
                                                <button name="submitBtn" class="formBtn">
                                                      <i class="fas fa-paper-plane font_two"></i>
                                                </button>
                                          </form>
                           <h3>Submit</h3>
                     </div>
              </div>
              <div class="box-2">
                     <div class="first-builder-page">
                        <div class="form-section now">
                              <form action="./submit.php" method="POST" class="formS" type="submit" name="formS">
                                  <div class="input-elements">
                                          <div class="input-name">
                                              <label style="color:white" for="title">Title*</label><br>
                                              <input name="username" type="text" class="name" required style="max-width:25;" autofocus maxlength="25">
                                              <div style="display:flex; justify-content:flex-end; color:white; padding:2px 0px" id="the_count">
                                                      <span id="current">0</span>
                                                      <span id="maximum">/ 25</span>
                                              </div>
                                              <small id="name_error" class="error"></small>
                                          </div>
                                          <div class="input-desc">
                                              <label style="color:white" for="desc">Description*</label><br>
                                              <input name="description" type="text" class="desc" required autofocus maxlength="300">
                                              <div style="display:flex; justify-content:flex-end; color:white; padding:2px 0px" id="the_count_two">
                                                      <span id="current">0</span>
                                                      <span id="maximum">/ 300</span>
                                              </div>
                                              <small id="desc_error" class="error"></small>
                                          </div>
                                  </div>
                             </form>
                       </div>
                       <div class="cta-add_question now">
                              <button class="addQBtn">+ Add Question</button>
                       </div>
                       <!-- <div class="hidden-hover-btn now" style="display:none;">
                              <button class="hidden-q-btn">+</button>
                       </div> -->
                       <div class="secret_menu_option hide">
                          <ul>
                                <a href="#" class="shortAns">
                                      <span><i class="fas fa-grip-lines"></i></span>
                                      <li>Short Answer</li>
                                </a>
                                <a href="#" class="longAns">
                                      <span><i class="fas fa-grip-lines"></i></span>
                                      <li>Long Answer</li>
                                </a>
                                <a href="#" class="email">
                                      <span><i class="fas fa-envelope"></i></span>
                                      <li>Email</li>
                                <a href="#" class="number">
                                      <span><i class="fas fa-square"></i></span>
                                      <li>Number</li>
                                </a>
                                <a href="#" class="multipleChoice">
                                     <span><i class="far fa-dot-circle"></i></span>
                                     <li>Multiple Choice</li>
                                </a>
                                <a href="#" class="checkbox">
                                    <span><i class="fas fa-check-square"></i></span>
                                    <li>Checkboxes</li>
                                </a>
                                <a href="#" class="dropdown">
                                    <span><i class="fas fa-chevron-circle-down"></i></span>
                                    <li>Dropdown</li>
                                </a>
                                <a href="#" class="starRating">
                                   <span><i class="fas fa-star"></i></span>
                                   <li>Star Rating</li>
                                </a>
                                <a href="#" class="date">
                                   <span><i class="far fa-calendar-alt"></i></span>
                                   <li>Date</li>
                                </a>
                                <a href="#" class="time">
                                   <span><i class="far fa-clock"></i></span>
                                   <li>Time</li>
                                </a>
                                <a href="#" class="section">
                                   <span><i class="fas fa-bars"></i></span>
                                   <li>Section</li>
                                </a>
                          </ul>
                    </div>
                    <div class="query_box"></div>
               </div> 
                    <div class="second-settings_page" style="display:none;">
                           <div class="setting-container">
                                  <div class="nav-wrapper">
                                         <nav class="navbar">
                                               <div class="setting_heading">
                                                     <h1 style="color:black">Setting</h1>
                                               </div>
                                               <div class="nav-cta">
                                                     <button class="setting_Next_btn">Next</button>
                                                     <button class="setting_Submit_btn">Submit</button>
                                                     <i style="color:black" class="fas fa-times setting_Cancel"></i>
                                               </div>
                                         </nav>
                                  </div>
                                  <div class="view_response_question_page">
                                         <div class="view_wrapper">
                                                <div class="view_header">
                                                            <a href="#" class="show_for_view">
                                                                  <h2>View</h2>
                                                            </a>
                                                            <a href="#" class="show_for_response">
                                                                  <h2>Responses</h2>
                                                            </a>
                                                            <a href="#" class="show_for_question">
                                                                  <h2>Questions</h2>
                                                            </a>
                                                </div>
                                                <div class="setting_view_wrapper" style="display:none;">
                                                            <div class="setting_view_box1">
                                                                  <img src="./assets/img/inchecked_img.png" alt="">
                                                                  <img src="./assets/img/color_lens.png" alt="">
                                                                  <h2>Change Theme</h2>
                                                            </div>
                                                            <div class="setting_view_box2">
                                                                  <span style="color:black">Click the current Theme or 'Change' below to choose a different Theme</span>
                                                            </div>
                                                            <div class="setting_view_box3">
                                                                  <div class="theme_box_thumbnail">
                                                                        <img src="./assets/img/account.png" style="height:140px; width:140px" alt="">
                                                                  </div> 
                                                                  <div class="default">
                                                                        <h2>Default</h2>
                                                                  </div>
                                                            </div>
                                                            <div class="setting_view_box4">
                                                                   <div class="btn">
                                                                         <button>CHANGE</button>
                                                                   </div>
                                                            </div>  
                                                            <div class="setting_view_box5">
                                                                  <input type="checkbox">
                                                                  <div class="text_check_info">
                                                                        <i class="fas fa-user-circle"></i>
                                                                        <h2>Show Logo</h2>
                                                                  </div>
                                                            </div> 
                                                            <div class="setting_view_box6">
                                                                  <span style="color:black">Do yo want to show your logo?</span>
                                                            </div>
                                                            <div class="setting_view_box7">
                                                                  <input type="checkbox">
                                                                  <div class="text_check_info_2">
                                                                        <i class="fas fa-home"></i>
                                                                        <h2>Show Logo</h2>
                                                                  </div>
                                                            </div> 
                                                            <div class="setting_view_box8">
                                                                  <span style="color:black">Do yo want to show your logo?</span>
                                                            </div>   
                                                            <div class="setting_view_box9">
                                                                    <input type="text" placeholder="Start">
                                                            </div>   
                                                            
                                                </div>
                                         </div> 
                                         <div class="response_wrapper" style="display:none;">
                                                      <div class="response_view_box1">
                                                            <input type="checkbox">
                                                            <div class="text_check_info_3">
                                                                  <i style="font-size:22px" class="fas fa-book"></i>
                                                                  <h2 style="color:black">Allow Multiple Responses</h2>
                                                            </div>
                                                      </div> 
                                                      <div class="response_view_box2">
                                                            <span style="color:black">Do you want to allow respondents to respond more than once?</span>
                                                      </div>   
                                                      <div class="response_view_box3">
                                                            <input type="checkbox">
                                                            <div class="text_check_info_4">
                                                                  <i style="font-size:22px" class="fas fa-record-vinyl"></i>
                                                                  <h2 style="color:black">Show Summary</h2>
                                                            </div>
                                                      </div> 
                                                      <div class="response_view_box4">
                                                            <span style="color:black">Do you want to allow respondents to view a summary of all responses after submitting?</span>
                                                      </div>   
                                          </div>
                                          <div class="question_wrapper" style="display:none;">
                                                      <div class="question_view_box1">
                                                            <input type="checkbox">
                                                            <div class="text_check_info_5">
                                                                  <i class="fas fa-book"></i>
                                                                  <h2 style="color:black">Allow Multiple Responses</h2>
                                                            </div>
                                                      </div> 
                                                      <div class="question_view_box2">
                                                            <span style="color:black">Do you want to allow respondents to respond more than once?</span>
                                                      </div>   
                                                      <div class="question_view_box3">
                                                            <input type="checkbox">
                                                            <div class="text_check_info_6">
                                                                  <i class="fas fa-random"></i>
                                                                  <h2 style="color:black">Show Summary</h2>
                                                            </div>
                                                      </div> 
                                                      <div class="question_view_box4">
                                                            <span style="color:black">Do you want to allow respondents to view a summary of all responses after submitting?</span>
                                                      </div>   
                                          </div>
                                  </div>
                           </div> 
                    </div>
              </div>
              <div class="box-3">
                     <div class="responsive_devices">
                           <i class="fas fa-mobile-alt mobile_icon"></i>
                           <i class="fas fa-tablet-alt tablet_icon"></i>
                           <i class="fas fa-desktop desktop_icon"></i>
                           <i class="fas fa-times cancel_btn"></i>
                     </div>
                     <div class="show_devices_on_screen">
                            <div class="mobile hide_devices">
                                    <img src="./assets/img/mobile_preview.png" alt="">
                                    <div class="device_queries for_mobile">
                                           <h1 class="device_h1_input_mobile"></h1>
                                           <p class="device_p_input_mobile"></p>
                                    </div>
                            </div>
                            <div class="tablet hide_devices">
                                    <img src="https://surveyheart.com/images/preview_tablet_skin.svg" alt="">
                                    <div class="device_queries for_tablet">
                                           <h1 class="device_h1_input_tablet"></h1>
                                           <p class="device_p_input_tablet"></p>
                                    </div>
                            </div>
                            <div class="desktop hide_devices">
                                    <div class="device_queries for_desktop">
                                           <h1 class="device_h1_input_desktop"></h1>
                                           <p class="device_p_input_desktop"></p>
                                     </div>
                            </div>
                     </div>
                     <div class="new_content_shown" style="position:absolute; display:grid; place-content:center; margin-top:220px; margin-left:160px; width:150px; word-break:break-all; text-align:center; font-size:12px; font-weight:bold">
                           <div class="new_content_wrapper"></div>
                     </div>
                     <div class="start-btn">
                            <button class="start_btn">START</button>
                     </div>
              </div>
      </div> 
</body>
       <?php 
            include './connect.php'; 
        ?>
      <script src="./assets/js/script.js"></script>
      
</html>