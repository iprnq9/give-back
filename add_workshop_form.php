<div class="row">
    <form class="col s12 m8 push-m2 l8 push-l2 center-align" method="post">
        <h3>Add Workshop</h3>
        <h6 class="red-text"><?php echo $error; ?></h6>
        <div class="row">
            <div class="input-field col s12">
                <input id="title" name="username" type="text" class="" maxlength="45" length="45" placeholder="Ex: 'Chemistry Experiments'">
                <label for="title">Workshop Title</label>
            </div>
            <div class="input-field col s12">
                <select>
                    <option value="" disabled selected>Choose grade level(s)</option>
                    <option value="elementary">Elementary (Grades K-4)</option>
                    <option value="middle">Middle (Grades 5-7)</option>
                    <option value="jr_high">Junior High (Grades 8-9)</option>
                    <option value="high_school">High School (Grades 10-12)</option>
                </select>
                <label>Grade Level(s)</label>
            </div>
            <div class="input-field col s12">
                <select>
                    <option value="" disabled selected>hours:minutes</option>
                    <?php
                    for($i=1;$i<=24;$i++){
                        $min_total = $i*15;
                        $hr = intval($min_total/60);
                        $min = $min_total%60;
                        if($min == 0){
                            $min = sprintf("%02d", $min);
                        }
                        print "<option value=\"".$min_total."\">".$hr.":".$min."</option>\n\t\t\t\t\t";
                    }
                    ?>
                </select>
                <label>Workshop Duration</label>
            </div>
            <div class="input-field col s12">
                <select>
                    <option value="" disabled selected>Choose frequency</option>
                    <option value="once">Occurs only once</option>
                    <option value="weekly">Weekly</option>
                    <option value="biweekly">Every other week</option>
                    <option value="month">Once a month</option>
                    <option value="varies">Varies</option>
                </select>
                <label>Workshop Frequency</label>
            </div>
            <div class="input-field col s12">
                <select multiple>
                    <option value="" disabled selected>Choose topic(s)</option>
                    <?php
                    include 'dbconnect.php';
                    include 'pull_tags.php';
                    for($i=1;$i<count($tagArray); $i++)
                        print "<option value=\"".$tagArray[$i]."\">".ucfirst($tagArray[$i])."</option>\n\t\t\t\t\t";
                    ?>
                </select>
                <label>Topic(s) Covered</label>
            </div>
            <div class="input-field col s12">
                <textarea id="short_description" class="materialize-textarea" length=200 maxlength="200" placeholder="Ex: 'In this workshop, I'd like to teach students how to play with the Arduino. It's an affordable hobbyist's dream. It's great for learning and having fun with electronics!'"></textarea>
                <label for="short_description">Short Description</label>
            </div>
            <div class="input-field col s12">
                <textarea id="full_description" class="materialize-textarea" length="15000" maxlength="15000" placeholder=""></textarea>
                <label for="full_description">Long Description</label>
            </div>
        </div>
        <p class="center-align">
            <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Publish
                <i class="material-icons right"></i>
            </button>
        </p>
    </form>
</div>