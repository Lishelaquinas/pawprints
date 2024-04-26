<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}

        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: black;

          width: 25%;
           height:321px;

        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: white;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;


        }

        clearfix {
            overflow: auto;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color:turquoise;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color:turquoise ;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;

            border: transparent;
            width: 70%;
            border-left: none;
            height: 300px;
        }

       /* img {
            border-radius: 100%;
            padding :10px;
            float:right;
        }*/
         div.gallery {
                                  margin: 5px;
                                  border: 1px solid #ccc;
                                  float: left;
                                  width: 300px;
                              }

        /*div.gallery:hover {
            border: 1px solid #777;
        }*/

        div.gallery img {
            width: 100%;
            height: 250px;
        }

        div.desc {
            padding: 10px;
            text-align: center;
         }
        .img1 {
            height: 200px;
            float: right;
        }

    </style>
</head>
<body>


<div class="tab">
    <button class="tablinks" onclick="opendog(event, 'breed')" id="defaultOpen">DOG BREED</button>
    <button class="tablinks" onclick="opendog(event, 'nutrition')">DOG NUTRITION</button>
    <button class="tablinks" onclick="opendog(event, 'training')">DOG TRAINING</button>
    <button class="tablinks" onclick="opendog(event, 'problems')">DOG PROBLEMS</button>
    <button class="tablinks" onclick="opendog(event, 'grooming')">DOG GROOMING</button>


</div>

<div id="breed" class="tabcontent">
    <h3>DOG BREED</h3>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/rotweiler.jpg" alt="Paris" width="100" height="100" >
    <div class="desc">ROTWEILER</div>

    </div>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/chowchow.jpg" alt="Paris" width="300" height="300">
    <div class="desc">CHOWCHOW</div>

</div>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/labrador.jpg" alt="Paris" width="300" height="300">
    <div class="desc">LABRADOR</div>

</div>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/shihtzu.jpg" alt="Paris" width="300" height="300">
    <div class="desc">SHIHTZU</div>

    </div>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/spaniel.jpg" alt="Paris" width="300" height="300">
        <div class="desc">SPANIEL</div>

    </div>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/goldretriever.jpg" alt="Paris" width="300" height="300">
        <div class="desc">GOLDRETREIVER</div>

    </div>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/pomerian.jpg" alt="Paris" width="300" height="300">
        <div class="desc">POMERIAN</div>

    </div>
    <div class="gallery">
    <img src="http://localhost/new/petadoption1/image/husky.jpg" alt="Paris" width="300" height="300">
        <div class="desc">HUSKY</div>

    </div>
</div>

<div id="nutrition" class="tabcontent">
    <h3>DOG NUTRITION</h3>
   <div>
    <h4>1.WATER</h4>
    <img class="img1" src="http://localhost/new/petadoption1/image/Dog-water.jpg" alt="Paris" width="300" height="300">

       <p><b>What it is:</b> A tasteless, colorless, odorless chemical made up of two hydrogen molecules and one oxygen molecule — hence the name H2O.<br>
           <b>Why it’s important:</b> Without water, life cannot exist. Water makes up 70 to 80 percent of a mature dog’s lean body mass.<br> Water’s many important functions include: dissolving and transporting nutrients to the cells; helping regulate body temperature; hydrolyzing protein, fat and carbohydrates for digestion; cushioning the organs and nervous system; flushing waste from the body.<br>
           <b>Special considerations:</b> A dog’s water requirements vary based on health, activity level and environmental temperature.<br> Most dogs self-regulate their water intake to meet their needs. Dogs fed high-moisture foods typically drink less than kibble-fed dogs.<br> All dogs should always have access to clean, fresh H2O.<br>
           <b>Get it from:</b> Straight from the tap fitted with a good quality filter.</p>
   </div>
    <div class="clearfix">
    <h4>2.PROTIEN</h4>
        <img class="img1" src="http://localhost/new/petadoption1/image/Eggs.jpg" alt="Paris" width="300" height="300">
    <p><b>What it is:</b> Along with fats and carbohydrates, protein is a macronutrient, meaning that it supplies energy. Protein is made up of amino acids, the building blocks of life.<br>
    <b>Why it’s important:</b> Protein supplies essential and non-essential amino acids that are critical to life. Proteins give the body structureand are necessary to make hormones that keep the body functioning. Dogs must receive the essential amino acids from diet, as their bodies cannot produce them at the required levels. <br>Protein can also supply energy in the absence of sufficient carbohydrates and fats.<br>
      <b> Special considerations:</b> Growing puppies and pregnant and lactating females require about twice as much protein as an adult dog at maintenance.<br>
              <b>Get it from:</b> Animal sources such as lean-muscle meats, fish and eggs; plant-based sources such as beans and lentils.</p>
    </div>
    <div>
        <h4>3.FAT</h4>
        <img class="img1" src="http://localhost/new/petadoption1/image/Fish.jpg" alt="Paris" width="300" height="300">
        <p><b>What it is:</b> A macronutrient made up of fatty acids. Dietary fats are either saturated (e.g., butter, cheese meat), polyunsaturated (e.g., fish oil, flaxseed oil, sunflower oil) or monounsaturated (e.g., olive oil).<br>
            <b>Why it’s important:</b> Fat supplies the most concentrated source of energy, with more than twice as many calories as protein and carbohydrates.<br> It also provides essential omega-3 and omega-6 fatty acids; enables absorption of fat-soluble vitamins; protects the internal organs; regulates body temperature; and promotes a healthy nervous system.<br>
            <b>Special considerations:</b> Too much fat can trigger pancreatitis or gastrointestinal issues. Avoid fatty table scraps.<br> Be aware that coconut oil does not supply essential fatty acids.<br>
            <b>Get it from:</b> Low-mercury fish and fish oil; plant-based oils, such as flaxseed and hempseed.</p>

    </div>
    <div>
        <h4>4.VITAMINS</h4>
        <img class="img1" src="http://localhost/new/petadoption1/image/Vitamins.jpg" alt="Paris" width="300" height="300">
        <p><b>What they are:</b> Vitamins are organic compounds (meaning that they contain carbon) that are required in small quantities for proper metabolic function. Vitamins can be soluble in fat (A, D, E and K) or in water (B and C).<br>
            <b>Why they’re important:</b> Vitamins play a variety of critical roles, including: regulating calcium and phosphorus levels (D); boosting the immune system (A); serving as antioxidants (C and E); enabling the blood to clot (K); and maintaining nervous system function (B12).<br>
            <b> Special considerations:</b> All home-prepared diets require vitamin supplementation. If you feed a commercial “complete and balanced” food, do not add additional fat-soluble vitamins, as toxicity can occur. <br>
            <b> Get them from:</b> A varied diet containing organ and muscle meats and dog-friendly plant-based foods.</p>
    </div>
    <div>
        <h4>5.CARBOHYDRATES</h4>
        <img class="img1" src="http://localhost/new/petadoption1/image/Carbohydrates.jpg" alt="Paris" width="300" height="300">
        <b>What they are:</b> A macronutrient made up of units of sugars, starches or indigestible fiber. Since dogs can synthesize glucose from sufficient dietary protein and fat.<br>
        <b>Why they’re important:</b> Carbohydrates are the main source of glucose, the “fuel” the body runs on.<br>
        <b>Special considerations:</b> Consuming a portion of energy from healthy carbohydrates spares protein for other important functions.<br>Steer clear of high-glycemic “junk” carbohydrates <br>
        <b>Get them from:</b> Dog-friendly vegetables, fruits, legumes and gluten-free grains.<br>

    </div>




</div>

<div id="training" class="tabcontent">
    <h1>A Guide on How to Train a Puppy or Dog</h1>
    <p>Training a puppy or a dog is an important first step in your relationship. The experience is not only bonding but teaches a dog about acceptable behavior. To get started, set a goal. The most popular first lesson for any new puppy or dog is for him to learn his name.<br>


        <h3>Here is a list of the most important 8 steps to train a puppy or dog</h3>
    <img class="img1" src="http://localhost/new/petadoption1/image/dog-housetraining.jpg" alt="Paris" width="300" height="300">

    <b>1.Commitment:</b> Choose a particular area that you’ll continue to use as a training-only area, somewhere you cannot be disturbed, and is relatively quiet.<br><br>


    <b> 2.Patience:</b> The first lesson should be something easy and fun for your puppy to learn, like his name.<br><br>


    <b>3.Consistency:</b> Limit training sessions to no more than 15 minutes, and a minimum of 5-minute periods, a couple times a day.<br><br>


    <b>4.Determination:</b> Keep signals and cues simple, and classes focused on one new skill. Use one word per skill learned.<br><br>


    <b> 5.Support:</b> Use a firm, and caring tone of voice.<br> Do not yell or growl at your puppy or dog, only encourage him with positive direction and reinforcement.<br><br>

    <img class="img1" src="http://localhost/new/petadoption1/image/dogtraining.jpg" alt="Paris" width="300" height="300">
    <b> 6.Praise:</b> Reward your dog or puppy’s good behavior immediately with something he values like treats made for puppies (his puppy dog food kibble could also be used as a treat), lots of praise or his favorite toy.<br><br>


    <b>   7.Practice:</b> Make the most of natural training opportunities that will help a puppy practice a routine such as sitting before putting his food down.<br> If he is very young, the time that you expect him to sit before eating shouldn’t be longer than a couple of seconds.<br><br>


    <b>  8.Socialize:</b> Puppies learn skills from other dogs and socializing a puppy is one of the most important stages in his development.<br> You can take him to a dog park, sign him up for puppy playtime classes or take very short, leashed walks<br> in an area where there are other dog walkers.<br><br>

    </p>
</div>


<div id="problems" class="tabcontent">
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/dogdigging.png" alt="Paris" width="300" height="300">
    <h4>How to Stop a Dog from Digging</h4>

    <p>
        1.If your dog is digging cooling pits, keep him inside in the air conditioning.<br><br>
        2.For dogs who like some extra help staying cool, set up a kiddie pool outdoors.<br><br>
        3.When dog dig tunnels or along fences, it is often in search of burrowing animals or insects who may<br><br> also live in the yard.<br>  <br>4.Use safe and humane means to prevent them from entering or to make your yard less attractive.<br><br><br><br>
    </p>
    </div>
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/dogchewing.jpg" alt="Paris" width="300" height="300">
    <h4>How to Stop A Dog From Chewing</h4>
    <p>
        1.Provide indestructible toys or puzzle toys.<br><br>
        2.Treat with super-sized, long-lasting chews that keep his teeth clean.<br><br>
        3.Set him up for success by dog-proofing your home. Make sure items like shoes, clothes and any<br><br> prized possessions are picked up and put away.<br>
    <br><br><br>
    </p>
    </div>
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/dogbiting.png" alt="Paris" width="300" height="300">
    <h4>How to Stop a Puppy from Biting</h4>
    <p>
        1.Before his teeth reach flesh, let out a high-pitched yelp. This will let him know the behavior is<br> <br>unwelcome.<br><br>
        2.Offer a soft toy to replace biting or nipping on your hand or fingers.<br><br>
        3.Praise your puppy or reward him with a small treat for chewing on the toy instead.<br>
<br><br><br><br>
    </p>
    </div>
    <div>

    <h4>Why Do Dogs Eat Grass</h4>
        <img class="img1" src="http://localhost/new/petadoption1/image/doggrass.jpg" alt="Paris" width="300" height="300">
    <p>
        1.Instinct: It’s well documented that wild dogs and even wolves regularly consume plants and grasses,<br><br> either found in the stomach contents of the animals they’ve eaten specific grasses out for roughage.<br><br>
        2.Habit: Some dogs may simply enjoy the taste and feel of grass in their mouths.<br><br>
        3.Nutrients: All plants provide some nutritional value and grass is no different.<br><br> However, dogs do not have the enzymes to breakdown the fiber in grass and so it offers no nutritional <br><br>value.<br><br>


    </p>
    </div>
</div>


<div id="grooming" class="tabcontent">
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/brushdogteeth.jpg" alt="Paris" width="300" height="300">
    <h4>BRUSH THEIR COATS TO KEEP THEIR FUR AND SKIN HEALTHY AND CLEAN</h4>
    <p>
        1.Brushing your dog will remove dirt, debris, dead hair and unpleasant odors from the coat and the<br><br> skin.<br><br>2. It distributes the natural oils, making your dog’s coat shiny and healthy. <br><br>3.Proper brushing will eliminate matting and tangling, which will make your next grooming appointment<br><br> go more smoothly.<br><br>
    <br><br>
    </p>
    </div>
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/brushingdogsteeth.jpg" alt="Paris" width="300" height="300">
    <h4> BRUSH THEIR TEETH ATLEAST ONCE A DAY</h4>
    <p>
        1.We have guests who only get their teeth brushed when they visit our salon, but that’s not nearly <br><br>enough.<br><br>2. Ideally, you should brush your dog’s teeth daily, but even 2 – 3 times a week makes a big difference. <br><br>3.Use only toothpaste made especially for dogs.<br><br>
    <br><br><br></p>
    </div>
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/dognail.jpg" alt="Paris" width="300" height="300">
    <h4> TRIM THEIR NAILS</h4>
    <p>
        1.Just like humans, some dog’s nails grow more quickly than others.<br><br>2. Some may require trimming every 2 weeks, and some can wait a full 6 weeks.<br> <br>3.Nail trimming is everyone’s least favorite task.<br>
    <br><br><br><br><br><br></p>
    </div>
    <div>

    <h4>CLEAN THEIR EARS TO PREVENT INFECTION</h4>
        <img class="img1" src="http://localhost/new/petadoption1/image/dogears.jpg" alt="Paris" width="300" height="300">
    <p>
        1.All dogs need their ears cleaned at least monthly.<br><br>2.But if you have a dog with longer or heavier ears that flop over the ear canal, more frequent ear <br><br>cleaning is a must.<br><br> 3.A buildup of bacteria or wax in the ears can lead to infection.<br><br>4. If you don’t have doggie ear cleaner at home, there are plenty of ear cleaner “recipes” online…<br><br> with ingredients generally on-hand like vinegar,hydrogen peroxide, etc..<br> <br>5.Wet a cotton ball with your cleansing solution and clean the outside area first, gradually working your way towards the inner area.<br>
    <br><br></p></div>
    <div>
    <h4>WASH THEIR FACE TO ELIMINATE BACTERIA</h4>
    <p>
        <img class="img1" src="http://localhost/new/petadoption1/image/dogfacewash.jpg" alt="Paris" width="300" height="300">

        1.Some breeds like bulldogs and shar peis have wrinkles or skin folds on their face.<br><br>2.Moisture can accumulate within those folds to set-up the perfect environment for yucky bacteria.<br><br>3.Bacteria can then lead to dermatitis or worse, infection.<br><br>4.It is important to keep these folds clean and dry.<br> <br>5.A warm washcloth or even baby wipes will do the trick.<br><br>6.If redness, bumps or odor becomes a problem, see your vet.<br><br>7. A more stringent cleaning schedule or solution may be in-order.<br>
    </p>
    </div>
</div>

<script>
    function opendog(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>
<?php
