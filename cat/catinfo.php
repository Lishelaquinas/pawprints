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
    <button class="tablinks" onclick="opendog(event, 'breed')" id="defaultOpen">CAT BREED</button>
    <button class="tablinks" onclick="opendog(event, 'nutrition')">CAT NUTRITION</button>
    <button class="tablinks" onclick="opendog(event, 'training')">CAT TRAINING</button>
    <button class="tablinks" onclick="opendog(event, 'problems')">CAT PROBLEMS</button>
    <button class="tablinks" onclick="opendog(event, 'grooming')">CAT GROOMING</button>


</div>


    <div id="breed" class="tabcontent">
        <h3>DOG BREED</h3>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/burmese.jpg" alt="Paris" width="100" height="100" >
            <div class="desc">BURMESE</div>

        </div>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/europeanshorthair.jpg" alt="Paris" width="300" height="300">
            <div class="desc">EUROPEAN SHORT HAIR</div>

        </div>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/persian.jpg" alt="Paris" width="300" height="300">
            <div class="desc">PERSIAN</div>

        </div>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/ragdoll.jpg" alt="Paris" width="300" height="300">
            <div class="desc">RAGDOLL</div>

        </div>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/scotish.jpg" alt="Paris" width="300" height="300">
            <div class="desc">SCOTTISH</div>

        </div>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/siberian.jpg" alt="Paris" width="300" height="300">
            <div class="desc">SIBERIAN</div>

        </div>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/vancat.jpg" alt="Paris" width="300" height="300">
            <div class="desc">VANCAT</div>

        </div>
        <div class="gallery">
            <img src="http://localhost/new/petadoption1/image/husky.jpg" alt="Paris" width="300" height="300">
            <div class="desc">HUSKY</div>

        </div>
    </div>




</div>

<div id="nutrition" class="tabcontent">
    <h3>CAT NUTRITION</h3>
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/Eggs.jpg" alt="Paris" width="300" height="300">
    <h4>1.CAT PROTIEN</h4>
    <p>1.Cats can obtain all their essential amino acids from animal protein. <br><br>2.Proteins are the building blocks of organs and tissues, including cartilage, tendons, hair, skin, blood,<br><br> muscles, and the heart.<br><br>3. They are part of enzymes, hormones, and antibodies.<br><br>

       4.Complete & balanced cat food should include animal protein from such meats as turkey, chicken or<br><br> beef, as well as fish and eggs.<br> <br>4.Feeding your cat a well-balanced diet assists in the healthy functioning and regeneration of body tissues and helps keep their claws and fur <br><br>strong and healthy.</p>
<br>
    </div>

    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/Fish.jpg" alt="Paris" width="300" height="300">
        <h4>2.FATS</h4>
        <p>
            1.Animal fats are the main source of energy for cats. “Good fats” is a term used to describe fats <br><br>naturally present in meat and fish as well as the essential fatty acids such as Omega 3 and Omega 6<br><br> fatty acids.<br><br>2. These “good fats” are fundamental to feline health.<br><br>

           3.“Fats help a cat maintain body temperature, provide energy and absorb vitamins such as A, D, E and<br><br> K,”.<br><br> 4.“Because cats can only receive ‘“good fats’” through what they consume, it is important the cat food you provide is enriched with Omega 3 and<br><br> Omega 6.”
        <br><br></p>
    </div>

    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/Carbohydrates.jpg" alt="Paris" width="300" height="300">
        <h4>3.CARBOHYDRATES</h4>
        <p>1.Although carbohydrates are not typically seen as essential nutrients in the diets of cats, carbs<br><br> do play critical roles in your cat’s body. <br><br>2.Carbohydrates provide a highly digestible, readily available energy source and should be present in<br><br> all cat foods.<br><br>

           3.Cats can get their necessary carbs from grains like wheat and rice.<br><br>4.Because these grains are typically added ingredients in many wet cat foods, these carbohydrate sources are pre-treated to facilitate digestibility <br><br>and absorption into your cat’s body.<br><br>5. Carbohydrates from uncooked soybeans and other legumes should be avoided as they contain many antinutritional factors.</p>
    </div>
    <div>

<h4>4.WATER</h4>
        <img class="img1" src="http://localhost/new/petadoption1/image/Dog-water.jpg" alt="Paris" width="300" height="300">
        <p>1.This one may seem like a no-brainer, but did you know cats tend to consume less water than they<br><br> need? “Seventy percent of a cat is water.<br><br>2.In the past, cats lived in natural habitats with restricted access to clean drinking water,”.<br><br>3.Through evolution, cats have adapted to this situation by obtaining the majority of the water they <br><br>need through the food they eat.”
   <br><br><br><br><br>
    </div>

    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/Minerals.jpg" alt="Paris" width="300" height="300">
        <h4>5.MINERALS</h4>
<p>
    1.Like vitamins, minerals are also essential to all mammals.<br><br> 2.Minerals contribute to enzyme formation, pH balance, nutrient utilization, and oxygen transportation.<br> <br>3.Elemental minerals are generally taken from the earth or water; chelated minerals are those that are<br><br> bound with other organic substances, often making them easier for the body to absorb.<br><br>4.There are a few minerals that are essential to our cat’s health.<br> <br>5.These include iron, calcium, magnesium, potassium, sodium, and chloride.<br><br>
</p>
    </div>

</div>

<div id="training" class="tabcontent">
    <div>

<h3>How to train a cat to Come on command</h3>
        <img class="img1" src="http://localhost/new/petadoption1/image/catcommand.jpg" alt="Paris" width="300" height="300">
    <p>
        1.Cats can learn to respond to a vocal cue and run your way.<br><br>
        2.This step of how to train a cat starts by making a distinct noise before feeding—before you open a <br><br>bag or can—like vocally call your cat, or click your tongue. <br><br>3.Your pet will learn to associate that noise with something positive (food) and will eventually head to<br><br> you when it hears it.<br><br> 4.Then, encourage this behavior outside of normal feeding times.<br><br> Start from short distances.<br><br> 5.Make the noise, use your clicker when your cat comes, and then reward your pet with the treat. <br><br>6.Over time, call the cat from longer distances.
    </p>
        <br>
    </div>
    <div>

<h3>How to train a cat to Use a toilet</h3>
        <img class="img1" src="http://localhost/new/petadoption1/image/cattoilet.jpg" alt="Paris" width="300" height="300">
<p>
    1.Training a cat to use the toilet definitely takes some work, but think of the benefits: You’ll save on<br><br> litter and enjoy a cleaner home.<br><br> 2.First, place a litter box adjacent to your toilet.<br><br> 3.Then gradually bring it closer and closer to the top of seat—you might need a stool to make the<br><br> process easier on the cat.<br><br> 4.Once your pet is accustomed to using a litter box<br><br> on top of the toilet, transition to a special litter box that fits within the toilet itself.
<br><br><br>

</p>
    </div>
    <div>
        <img class="img1" src="http://localhost/new/petadoption1/image/cathandshake.jpg" alt="Paris" width="300" height="300">
<h3>How to train a cat to Shake hands</h3>

<p>
    1.This cat training is simpler than you might expect: Get a treat ready, then align yourself to the same <br><br>level as your cat.<br><br>2. Tap your cat’s paw while saying “shake,” and use your clicker when it moves its paw. <br><br>3.Repeat training until your cat offers its paw in response to the “shake” command without tapping.<br><br>4. Like the “come on command” trick, this can take a few training sessions over the course of a couple<br><br> of days.
<br><br></p>
    </div>
    <div>

    <h3>How to train a cat to Walk on a leash</h3>
        <img class="img1" src="http://localhost/new/petadoption1/image/catleach.jpg" alt="Paris" width="300" height="300">
<p>
    1.Get a harness with a leash that attaches at the cat’s back, not its neck.<br><br>
    2.The ASPCA recommends that before putting it on you leave it out for a few days in areas where<br><br> your cat goes, like its feeding area or favorite sleeping spot, so that the animal is accustomed to the <br><br>sight of it.<br><br>3. Next, you’ll transition to draping the harness over the cat when giving it<br><br> a treat.<br><br>
    4.Once your pet is comfortable with the harness, attach the leash to it, and let your cat wander freely inside with it.<br><br>5. After a few days, start holding the leash during training.

</p>
    </div>
</div>


<div id="problems" class="tabcontent">
    <div>

    <h3>HYPERESTHESIA</h3>
        <img class="img1" src="http://localhost/new/petadoption1/image/cathyper.jpg" alt="Paris" width="300" height="300">
    <p>1.Hyperesthesia is a syndrome that is not completely understood.<br><br> 2.Cats with this problem are overly sensitive to being touched, especially along the back.<br><br> 3.They may howl or become agitated when handled.<br><br> 4.A cat may groom the area excessively, hiss at or bite its back, cry, dash away, or defecate.<br><br> 5.Your veterinarian will first rule out medical causes, especially pain and skin conditions, which can<br><br> cause similar signs.<br><br> 6.If a medical condition is not present, a compulsive disorder may be to blame.</p>
    <br></div>
    <div>

        <h3>COMPULSIVE BEHAVIOR</h3>
        <img class="img1" src="http://localhost/new/petadoption1/image/catcompulsive.jpg" alt="Paris" width="300" height="300">
        <p>1.Compulsive behavior also occurs in cats. These are otherwise normal behaviors that occur out of<br><br> context or so often that they interfere with normal activity. <br><br>2.The most common types are excessive grooming, and chewing of wool, other fabrics, plastic, rubber,<br><br> cardboard, or string.<br><br>3. In many cats compulsive behavior results from stress or anxiety.<br><br>4.Chewing wool or other fabrics tends to occur in Siamese and similar breeds and is likely inherited. <br><br>5.Your veterinarian can help you with a behavior modification program and medication in order to manage these types of behavior problems.<br><br></p>
    </div>
    <div>

        <h3>FEAR</h3>
        <img class="img1" src="http://localhost/new/petadoption1/image/catfear.jpg" alt="Paris" width="300" height="300">
       <p>
           1.Fear can result from insufficient early socialization as a kitten or frightening experiences.It can also<br><br> be inherited.<br><br> 2. Cats may fear unfamiliar people, unfamiliar cats, dogs, noises, or places and situations such as <br><br>car rides, veterinary visits, and unfamiliar environments.<br><br>3. Some cats may also be fearful of familiar people and cats.<br><br>4. Fear can result in threatening behavior (such as growling or hissing), overt aggression (biting or <br></br>scratching), avoidance, hiding, and possibly spraying.<br><br>5. If possible, it is best to identify what is causing the fear.<br><br>6. Your veterinarian can then create a treatment plan that includes avoidance (if possible), behavior modification techniques, and possibly <br></br>medications.
      <br><br> </p>
    </div>
<div>
    <h3>OLDER CATS</h3>
    <img class="img1" src="http://localhost/new/petadoption1/image/catsold.jpg" alt="Paris" width="300" height="300">
    <p>
        1.Older cats can experience a number of medical conditions that can cause abnormal behaviors. <br><br>2.They can also have pathologically abnormal behaviors, which can be more difficult to treat than<br><br> those seen in younger animals.<br><br>3.Older cats may also have cognitive dysfunction syndrome, which is similar to Alzheimer disease in<br><br> people and can cause disorientation, agitation, anxiety, memory loss, housesoiling, and personality<br><br> changes.<br><br> 4.If you notice behavioral changes in your older cat, schedule an appointment with your veterinarian, who will rule out medical conditions and<br><br> develop an appropriate treatment plan.<br><br>
    </p>
</div>












    </div>


<div id="grooming" class="tabcontent">
    <h3>BRUSHING BASICS</h3>
    <p>Regular brushing offers benefits such as dead hair and dirt, and removing or preventing mats and tangles.<br>
    <h4>For shorthaired cats:</h4>

    <img class="img1" src="http://localhost/new/petadoption1/image/catgroom.jpg" alt="Paris" width="300" height="300">

        1.Start with a fine-toothed metal comb.Run it through the cat’s fur from head to tail tip.<br><br> 2.Watch for small pepper-like specks that could indicate the presence of cat fleas.<br><br>
        3.Use a bristle or soft rubber brush next to remove loose hair.<br>
        <h4>For longhaired cats:</h4>


        1.Start with a wide-toothed comb to remove debris that may be caught in the cat’s coat. Carefully<br><br> untangle any knots.<br><br>
        2.Next use a wire brush or a bristle brush to remove loose hair.<br><br>
        3.Consider using a toothbrush to brush around the cat’s face.<br>

    <h3>BATH TIME </h3>
    <img class="img1" src="http://localhost/new/petadoption1/image/catbath.jpg" alt="Paris" width="300" height="300">
    <p>1.Start by making the water temperature pleasant. It should be warm – not hot, and not cold.<br><br>
        2.Use a shampoo that’s made specifically for use with cats, and labeled accordingly.<br><br>
        3.Gently wet the cat down using a spray hose, but DO NOT spray or pour water directly on the cat’s<br><br> head – you don’t want to spray or pour into the cat’s eyes, ears or nose. <br>
       <br> 4.Start at the cat’s head, and gently work in the shampoo from head to tail.<br><br>
        5.Rinse gently but thoroughly, making sure that all the shampoo is rinsed out. Again, be sure to avoid <br><br>spraying or pouring water directly on the cat’s head.<br><br>
        6.Gently pat dry with a large towel.</p>

    <h3>PEDICURE</h3>
    <img class="img1" src="http://localhost/new/petadoption1/image/catpedicure.jpg" alt="Paris" width="300" height="300">

    <p>
        1.Start out by spending some time just training your cat to be comfortable and accepting of having<br><br> her feet handled.<br><br>
        2.Begin to massage its feet on a daily basis. Do that by running your hand along its leg, and then very <br><br>gently pressing with your thumb on the pad of each toe, causing the claw to extend. <br><br>
        3. After a week or two the cat will likely become comfortable with its daily foot massage.<br><br>

        4.Once the cat is comfortable with the massaging, it’s OK to clip. <br><br>
        5.Use a quality, sharp clipper or nail scissors specifically designed for use on cats. <br><br>
        6.Cut parallel to the flat of the claw, and clip off only the white tip.<br><br>
    </p>



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
