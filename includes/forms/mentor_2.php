<section id="wrapper">
    <h3 class="text-center"><b>Joining as a Partner</b></h3>

    <form class="testform" id="testform" method="post">
<!--       <fieldset id="testform">
        <input type="text" name="name" placeholder="Name"/>
        
        <input id="mentor_job" name="mentor_job" type="text" placeholder="Job Title"/>

        <input id="mentor_org" name="mentor_org" type="text" placeholder="Organization"/>

        <input id="mentor_add" name="mentor_add" type="text" placeholder="Your Complete Address"/>

        <select id="mentor_country" type="text" name="mentor_country" >
          <?php //require("countries.php"); ?>  
        </select>

        <input id="mentor_zip" name="mentor_zip" type="text" placeholder="Zip Code">

        <input id="mentor_office" name="mentor_office" type="text" placeholder="Office Phone">

        <input id="mentor_fax" name="mentor_fax" type="text" placeholder="Office Fax Number" >

        <input id="mentor_mobile" name="mentor_mobile" type="text" placeholder="Mobile number">

        <input id="mentor_email" name="email" type="email" placeholder="E-mail">
      </fieldset> -->

      <!-- <fieldset id="testform">        
        <label><b>Your Short Bio. (max. 60 words)</b></label>
        <textarea id="mentor_bio" rows="5" name="mentor_bio"></textarea>

        <label><b>Provide a brief description about yourself.</b></label>
        <textarea id="mentor_desc" rows="6" name="mentor_desc"></textarea>
      </fieldset> -->

      <!-- <fieldset id="testform">
        <label><b>Preferred Type of Contact:</b></label>
        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_cont_type" id="checkbox1"/>
            <label for="checkbox1" name="checkbox1_lbl" class="css-label lite-orange-check">Forum Discussion</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_cont_type" id="checkbox2"/>
            <label for="checkbox2" name="checkbox2_lbl" class="css-label lite-orange-check">Only One-To-One Meetings with Incubatee</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_cont_type" id="checkbox3"/>
            <label for="checkbox3" name="checkbox3_lbl" class="css-label lite-orange-check">Skype</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_cont_type" id="checkbox4"/>
            <label for="checkbox4" name="checkbox4_lbl" class="css-label lite-orange-check">Coaching</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_cont_type" id="checkbox5"/>
            <label for="checkbox5" name="checkbox5_lbl" class="css-label lite-orange-check">Other</label>
          </li>
        </ul>

        <label><b>Level of Mentoring You Want to Participate In:</b></label>
        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_part_level" id="checkbox6"/>
            <label for="checkbox6" name="checkbox7_lbl" class="css-label lite-orange-check">Technical Skills Transfer</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_part_level" id="checkbox7"/>
            <label for="checkbox7" name="checkbox7_lbl" class="css-label lite-orange-check">Business Development</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_part_level" id="checkbox8"/>
            <label for="checkbox8" name="checkbox8_lbl" class="css-label lite-orange-check">Personal Development</label>
          </li>
        </ul>

        <label><b>Access to Financ:</b></label>
        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_acc_2_fin" id="checkbox22"/>
            <label for="checkbox22" name="checkbox22_lbl" class="css-label lite-orange-check">Fundraising</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_acc_2_fin" id="checkbox23"/>
            <label for="checkbox23" name="checkbox23_lbl" class="css-label lite-orange-check">Angel Capital</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_acc_2_fin" id="checkbox24"/>
            <label for="checkbox24" name="checkbox24_lbl" class="css-label lite-orange-check">Loans</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_acc_2_fin" id="checkbox25"/>
            <label for="checkbox25" name="checkbox25_lbl" class="css-label lite-orange-check">Other</label>
          </li>
        </ul>
      </fieldset>

      <fieldset id="testform">
        <label><b>Professional Services, please specify:</b></label>
        <textarea id="mentor_prof" rows="6" name="mentor_prof"></textarea>

        <label><b>What is the nature of the assistance you can provide? Mark all appropriate box(es) in the sections below:</b></label>

        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_fin_acc" id="checkbox9"/>
            <label for="checkbox9" name="checkbox9_lbl" class="css-label lite-orange-check">Bookkeeping</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_fin_acc" id="checkbox10"/>
            <label for="checkbox10" name="checkbox10_lbl" class="css-label lite-orange-check">Understand Financial Statements</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_fin_acc" id="checkbox11"/>
            <label for="checkbox11" name="checkbox11_lbl" class="css-label lite-orange-check">Insurance</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_fin_acc" id="checkbox12"/>
            <label for="checkbox12" name="checkbox12_lbl" class="css-label lite-orange-check">Investments</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_fin_acc" id="checkbox13"/>
            <label for="checkbox13" name="checkbox13_lbl" class="css-label lite-orange-check">Financial Statutory Requirements</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_fin_acc" id="checkbox14"/>
            <label for="checkbox14" name="checkbox14_lbl" class="css-label lite-orange-check">Other</label>
          </li>
        </ul>
          </fieldset>

          <fieldset id="testform">
        <label><b>Technical Skills, please specify:</b></label>
        <textarea rows="6" id="mentor_tech" name="mentor_tech"></textarea>

        <label><b>PR, Marketing and Sales:</b></label>

        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_pr" id="checkbox15"/>
            <label for="checkbox15" name="checkbox15_lbl" class="css-label lite-orange-check">Product Marketing</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_pr" id="checkbox16"/>
            <label for="checkbox16" name="checkbox16_lbl" class="css-label lite-orange-check">Events management</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_pr" id="checkbox17"/>
            <label for="checkbox17" name="checkbox17_lbl" class="css-label lite-orange-check">Public Relations</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_pr" id="checkbox18"/>
            <label for="checkbox18" name="checkbox18_lbl" class="css-label lite-orange-check">Advertising</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_pr" id="checkbox19"/>
            <label for="checkbox19" name="checkbox19_lbl" class="css-label lite-orange-check">Social Networking</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_pr" id="checkbox20"/>
            <label for="checkbox20" name="checkbox20_lbl" class="css-label lite-orange-check">Sales</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_pr" id="checkbox21"/>
            <label for="checkbox21" name="checkbox21_lbl" class="css-label lite-orange-check">Website</label>
          </li>
        </ul>
          </fieldset>

          <fieldset id="testform">
        <label><b>Legal</b></label>
        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_legal" id="checkbox33"/>
            <label for="checkbox33" name="checkbox33_lbl" class="css-label lite-orange-check">Governance and Capacity Building</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_legal" id="checkbox34"/>
            <label for="checkbox34" name="checkbox34_lbl" class="css-label lite-orange-check">Suitable Business Forms</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_legal" id="checkbox35"/>
            <label for="checkbox35" name="checkbox35_lbl" class="css-label lite-orange-check">Compliance Issues</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_legal" id="checkbox36"/>
            <label for="checkbox36" name="checkbox36_lbl" class="css-label lite-orange-check">Contracts and Agreements</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_legal" id="checkbox37"/>
            <label for="checkbox37" name="checkbox37_lbl" class="css-label lite-orange-check">Other</label>
          </li>
        </ul>

        <label><b>Strategic Planning</b></label>
        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_str" id="checkbox38"/>
            <label for="checkbox38" name="checkbox38_lbl" class="css-label lite-orange-check">Sustainability</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_str" id="checkbox39"/>
            <label for="checkbox39" name="checkbox39_lbl" class="css-label lite-orange-check">Up scaling</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_str" id="checkbox40"/>
            <label for="checkbox40" name="checkbox40_lbl" class="css-label lite-orange-check">New Markets</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_str" id="checkbox41"/>
            <label for="checkbox41" name="checkbox41_lbl" class="css-label lite-orange-check">Imports and Exports</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_str" id="checkbox42"/>
            <label for="checkbox42" name="checkbox42_lbl" class="css-label lite-orange-check">Product Development</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_str" id="checkbox43"/>
            <label for="checkbox43" name="checkbox43_lbl" class="css-label lite-orange-check">Other</label>
          </li>
        </ul>
          </fieldset> -->

          <fieldset id="testform">
          <!--   <label><b>Human Resources</b></label>
        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_hr" id="checkbox26"/>
            <label for="checkbox26" name="checkbox26_lbl" class="css-label lite-orange-check">Employee Wellness</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_hr" id="checkbox27"/>
            <label for="checkbox27" name="checkbox27_lbl" class="css-label lite-orange-check">Labour Relations</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_hr" id="checkbox28"/>
            <label for="checkbox28" name="checkbox28_lbl" class="css-label lite-orange-check">Payroll</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_hr" id="checkbox29"/>
            <label for="checkbox29" name="checkbox29_lbl" class="css-label lite-orange-check">Recruitment</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_hr" id="checkbox30"/>
            <label for="checkbox30" name="checkbox30_lbl" class="css-label lite-orange-check">Job Descriptions and Assessments</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_hr" id="checkbox31"/>
            <label for="checkbox31" name="checkbox31_lbl" class="css-label lite-orange-check">Performance Management</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="mentor_hr" id="checkbox32"/>
            <label for="checkbox32" name="checkbox32_lbl" class="css-label lite-orange-check">Other</label>
          </li>
        </ul> -->
        <label name="list1">
        <label><b>What days of the week are you available?</b></label>
        <ul style="list-style-type:none">
          <li>
            <input type="checkbox" class="css-checkbox" name="list" id="checkbox44"/>
            <label for="checkbox44" name="checkbox44_lbl" class="css-label lite-orange-check">Saturday</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="list" id="checkbox45"/>
            <label for="checkbox45" name="checkbox45_lbl" class="css-label lite-orange-check">Sunday</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="list" id="checkbox46"/>
            <label for="checkbox46" name="checkbox46_lbl" class="css-label lite-orange-check">Monday</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="list" id="checkbox47"/>
            <label for="checkbox47" name="checkbox47_lbl" class="css-label lite-orange-check">Tuesday</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="list" id="checkbox48"/>
            <label for="checkbox48" name="checkbox48_lbl" class="css-label lite-orange-check">Wednesday</label>
          </li>
          <li>
            <input type="checkbox" class="css-checkbox" name="list" id="checkbox49"/>
            <label for="checkbox49" name="checkbox49_lbl" class="css-label lite-orange-check">Thursday</label>
          </li>
        </ul>
      </label>
        <label><b>What hours of the days are you available?</b></label>
        <input id="mentor_hours" name="name" type="text"/>
          </fieldset>
          <div class="clear"></div>
    </form>