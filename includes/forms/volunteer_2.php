  <form id="msform2" action="#" class="msform">
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

           <h2 class="fs-title"><b>Joining as a Volunteer</b></h2>

           <!-- Step1 -->
           <fieldset>
             <input id="volunteer_name" name="volunteer_name" type="text" class="validate[required]" placeholder="First Name">
             
             <input class="validate[required]" id="volunteer" name="volunteer" type="text" placeholder="Last Name">

             <input class="validate[required]" id="volunteer-phone" name="volunteer-phone" type="text" placeholder="Phone No.">

             <input id="volunteer_email" name="mentor_email" type="email" class="validate[required,custom[email]]" placeholder="E-mail">

             <input class="validate[required]" id="volunteer-duty" name="volunteer-duty" type="text" placeholder="Company Name">

             <input class="validate[required]" id="volunteer-position" name="volunteer-position" type="text" placeholder="Position">

             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

           <!-- Step2 -->
            <fieldset>
             <h3 class="fs-subtitle"><b>Languages: which languages are you fluent, i.e. speaking, writing, AND reading?</b></h3>

            <label for="volunteer-lan">

              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="volunteer-lan" id="volunteer-lan-0" value="Dari">Dari<br>

              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="volunteer-lan" id="volunteer-lan-1" value="Pashto">Pashto<br>

              <input type="checkbox" class="validate[minCheckbox[1]] checkbox" name="volunteer-lan" id="volunteer-lan-2" value="English">

              English<br>

            </label>
            <input id="volunteer_lan" name="volunteer_lan" type="text" placeholder="Other Languages">
            
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
           </fieldset>

          <!-- Step3-->
           <fieldset>

            <textarea id="volunteer-contribut" rows="6" name="volunteer-contribut" class="validate[required]" placeholder="How do you think you can contribute to Startup Afghanistan?"></textarea>

            <textarea rows="6" id="volunteer_entre" name="volunteer_entre" class="validate[required]" placeholder="What are your entrepreneurial endeavors/ background?"></textarea>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>


          <!-- Last step -->
           <fieldset>

            <textarea rows="6" id="volunteer_up" name="volunteer_up" class="validate[required]" placeholder="In 2 sentences, what gets you up in the morning?"></textarea>
                  
             <input type="button" name="previous" class="previous action-button" value="Previous" />
             <input type="submit" id="submit" name="submit" class="submit action-button"/>
           </fieldset>
  </form>

