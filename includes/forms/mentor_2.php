  <form id="msform1" class="msform" action="#">
          <!-- Progress Bar    -->
          <ul id="progressbar">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
           </ul>

           <h2 class="fs-title"><b>Joining as a Partner</b></h2>

           <!-- Step1 -->
           <fieldset>
             <input type="text" class="validate[required]" name="twitter" placeholder="Twitter"/>
             
             <input id="mentor" name="mentor" type="text" class="validate[required]"
             placeholder="Job Title"/>

             <input id="mentor_org" type="text" class="validate[required]" name="mentor_org" placeholder="Organization"/>

             <input id="mentor_add" type="text" class="validate[required]" name="mentor_add" placeholder="Your Complete Address"/>

             <select id="mentor_country" type="text" name="mentor_country" >
               <?php require("countries.php"); ?>  <!-- countries name inserted -->
             </select>

             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

           <!-- Step2 -->
           <fieldset>
             <input id="mentor_zip" name="mentor_zip" type="text" placeholder="Zip Code">

             <input id="mentor_office" name="mentor_office" type="text" class="validate[required]" placeholder="Office Phone">

             <input id="mentor_fax" name="mentor_fax" type="text" placeholder="Office Fax Number" >

             <input id="mentor_mobile" name="mentor_mobile" type="text" class="validate[required]" placeholder="Mobile number">

             <input id="mentor_email" name="mentor_email" type="email" class="validate[required,custom[email]]" placeholder="E-mail">
            
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

           <!-- Step3 -->
           <fieldset>
             <textarea  id="mentor_bio" rows="5" name="mentor_bio" class="validate[required]" placeholder="Your Short Bio. (max. 60 words)"></textarea>

             <textarea  id="mentor_desc" rows="6" name="mentor_desc" placeholder="Provide a brief description about yourself"></textarea>
            
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

            <!-- Step4 -->
            <fieldset>
             <h3 class="fs-subtitle"><b>Preferred Type of Contact</b></h3>
             <label for="mentor_cont_type-0">
                   <input type="checkbox" name="mentor_cont_type" id="mentor_cont_type[]" value="Forum Discussion">Forum Discussion<br>
                   <input type="checkbox" name="mentor_cont_type" id="mentor_cont_type[]" value="Only One-To-One Meetings with Incubatee">Only One-To-One Meetings with Incubatee<br>
                   <input type="checkbox" name="mentor_cont_type" id="mentor_cont_type[]" value="Skype">Skype<br>
                   <input type="checkbox" name="mentor_part_level" id="mentor_part_level[]" value="Coaching">Coaching<br>
                   <input type="checkbox" name="mentor_part_level" id="mentor_part_level[]" value="Other">Other<br>
             </label>
            
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

           <!-- Step5 -->
            <fieldset>
             <h3 class="fs-subtitle"><b>Level of Mentoring You Want to Participate In</b></h3>
             <label for="mentor_part_level-0">
               <input type="checkbox" name="mentor_part_level" id="mentor_part_level[]" value="Technical Skills Transfer">Technical Skills Transfer<br>
               <input type="checkbox" name="mentor_part_level" id="mentor_part_level[]" value="Business Development">Business Development<br>
               <input type="checkbox" name="mentor_part_level" id="mentor_part_level[]" value="Personal Development">Personal Development<br>
             </label>

             <textarea class="form-control" id="mentor_prof" rows="6" name="mentor_prof" data-parsley-maxlength="100" data-parsley-trigger="keyup" placeholder="Professional Services, please specify"></textarea>

            
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

          <!-- Step6 -->
           <fieldset>
            <h3 class="fs-subtitle"><b>What is the nature of the assistance you can provide? Mark all appropriate box(es) in the sections below</b></h3>
            <label for="mentor_fin_acc-0">
              <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc[]" value="Bookkeeping">
              Bookkeeping<br>
              <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc[]" value="Understand Financial Statements">Understand Financial Statements<br>
              <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc[]" value="Insurance">
              Insurance<br>
              <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc[]" value="Investments">
              Investments<br>
              <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc[]" value="Financial Statutory Requirements">
              Financial Statutory Requirements<br>
              <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc[]" value="Other">
              Other<br>
            </label>

            <textarea class="form-control" rows="6" id="mentor_tech" name="mentor_tech" data-parsley-maxlength="100" data-parsley-trigger="keyup" placeholder="Technical Skills, please specify:"></textarea>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <!-- Step7 -->
            <fieldset>
            <h3 class="fs-subtitle"><b>PR, Marketing and Sales</b></h3>
                  <label for="mentor_pr-0">
                    <input type="checkbox" name="mentor_pr" id="mentor_pr[]" value="Product Marketing">Product Marketing<br>
                    <input type="checkbox" name="mentor_pr" id="mentor_pr[]" value="Sales">Sales<br>
                    <input type="checkbox" name="mentor_pr" id="mentor_pr[]" value="Events management">Events management<br>
                    <input type="checkbox" name="mentor_pr" id="mentor_pr[]" value="Public Relations">Public Relations<br>
                    <input type="checkbox" name="mentor_pr" id="mentor_pr[]" value="Advertising">
                    Advertising<br>
                    <input type="checkbox" name="mentor_pr" id="mentor_pr[]" value="Social Networking">Social Networking<br>
                    <input type="checkbox" name="mentor_pr" id="mentor_pr[]" value="Website">
                    Website<br>
                  </label>
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

           <!-- Step8 -->
            <fieldset>
            <h3 class="fs-subtitle"><b>Access to Financ</b></h3>
                  <label for="mentor_acc_2_fin-0">
                    <input type="checkbox" name="mentor_acc_2_fin" id="mentor_acc_2_fin[]" value="Fundraising">Fundraising<br>
                    <input type="checkbox" name="mentor_acc_2_fin" id="mentor_acc_2_fin[]" value="Angel Capital">Angel Capital<br>
                    <input type="checkbox" name="mentor_acc_2_fin" id="mentor_acc_2_fin[]" value="Loans">Loans<br>
                    <input type="checkbox" name="mentor_acc_2_fin" id="mentor_acc_2_fin[]" value="Other">Other<br>
                  </label>

            <h3 class="fs-subtitle"><b>Human Resources</b></h3>
                  <label for="mentor_hr-0">
                    <input type="checkbox" name="mentor_hr" id="mentor_hr[]" value="Employee Wellness">Employee Wellness<br>
                    <input type="checkbox" name="mentor_hr" id="mentor_hr[]" value="Labour Relations">
                    Labour Relations<br>
                    <input type="checkbox" name="mentor_hr" id="mentor_hr[]" value="Payroll">
                    Payroll<br>
                    <input type="checkbox" name="mentor_hr" id="mentor_hr[]" value="Recruitment">
                    Recruitment<br>
                    <input type="checkbox" name="mentor_hr" id="mentor_hr[]" value="Job Descriptions and Assessments">Job Descriptions and Assessments<br>
                    <input type="checkbox" name="mentor_hr" id="mentor_hr[]" value="Performance Management">Performance Management<br>
                    <input type="checkbox" name="mentor_hr" id="mentor_hr[]" value="Other">
                    Other<br>
                  </label>

             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

           <!-- Step9 -->
           <fieldset>
            <h3 class="fs-subtitle"><b>Legal</b></h3>
            <label for="mentor_legal-0">
            <input type="checkbox" name="mentor_legal" id="mentor_legal[]" value="Governance and Capacity Building">Governance and Capacity Building<br>
            <input type="checkbox" name="mentor_legal" id="mentor_legal[]" value="Suitable Business Forms">Suitable Business Forms<br>
            <input type="checkbox" name="mentor_legal" id="mentor_legal[]" value="Compliance Issues">
            Compliance Issues<br>
            <input type="checkbox" name="mentor_legal" id="mentor_legal[]" value="Contracts and Agreements">Contracts and Agreements<br>
            <input type="checkbox" name="mentor_legal" id="mentor_legal[]" value="Other">
            Other<br>
            </label>  

            <h3 class="fs-subtitle"><b>Strategic Planning</b></h3>
            <label for="mentor_str-0">
              <input type="checkbox" name="mentor_str" id="mentor_str[]" value="Sustainability">
              Sustainability<br>
              <input type="checkbox" name="mentor_str" id="mentor_str[]" value="Up scaling">
              Up scaling<br>
              <input type="checkbox" name="mentor_str" id="mentor_str[]" value="New Markets">
              New Markets<br>
              <input type="checkbox" name="mentor_str" id="mentor_str[]" value="Imports and Exports">
              Imports and Exports<br>
              <input type="checkbox" name="mentor_str" id="mentor_str[]" value="Product Development">
              Product Development<br>
              <input type="checkbox" name="mentor_str" id="mentor_str[]" value="Other">
              Other<br>
            </label>
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>


          <!-- Step10 -->
           <fieldset>
            <h3 class="fs-subtitle"><b>What days of the week are you available? </b></h3>

            <label for="mentor_week_days-0">

              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="mentor_week_days" id="maxcheck1" value="saturday">Saturday<br>

              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="mentor_week_days" id="maxcheck2" value="sunday">
              Sunday<br>
              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="mentor_week_days" id="maxcheck3" value="monday">
              Monday<br>
              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="mentor_week_days" id="maxcheck4" value="tuesday">
              Tuesday<br>
              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="mentor_week_days" id="maxcheck5" value="wednesday">Wednesday<br>
              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="mentor_week_days" id="maxcheck6" value="thursday">
              Thursday<br>
            </label>

            <h3 class="fs-subtitle"><b>What days of the week are you available? </b></h3>
            <input id="mentor_hours" name="mentor_hours" type="text" placeholder="What hours of the days are you available?" class="validate[required]">
                  
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="submit" id="submit" name="submit" class="submit action-button"/>
           </fieldset>
  </form>

