<style type="text/css">
  /***********************************************/
/***************** Accordion ********************/
/***********************************************/
@import url('https://fonts.googleapis.com/css?family=Tajawal');
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

.bottom_line{
  border-bottom: 1px solid #307d11;
}

body{
   background-attachment: fixed;
}

/*Now the CSS*/
* {
  margin: 0;
  padding: 0;
}

.tree ul {
  padding-top: 20px;
  position: relative;

  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

.tree li {
  float: left;
  text-align: center;
  list-style-type: none;
  position: relative;
  padding: 20px 5px 0 5px;

  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before,
.tree li::after {
  content: "";
  position: absolute;
  top: 0;
  right: 50%;
  border-top: 1px solid #ccc;
  width: 50%;
  height: 20px;
}
.tree li::after {
  right: auto;
  left: 50%;
  border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without
any siblings*/
.tree li:only-child::after,
.tree li:only-child::before {
  display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child {
  padding-top: 0;
}

/*Remove left connector from first child and
right connector from last child*/
.tree li:first-child::before,
.tree li:last-child::after {
  border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before {
  border-right: 1px solid #ccc;
  border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after {
  border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before {
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  border-left: 1px solid #ccc;
  width: 0;
  height: 20px;
}

.tree li a {
  border: 1px solid #ccc;
  padding: 20px 45px;
  text-decoration: none;
  color: #FFFFFF;
  font-family: arial, verdana, tahoma;
  font-size: 11px;
  display: inline-block;

  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;

  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}
.t2 li a {
	padding: 9px 10px;
}


/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover,
.tree li a:hover + ul li a {
  background: #c8e4f8;
  color: #000;
  border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover + ul li::after,
.tree li a:hover + ul li::before,
.tree li a:hover + ul::before,
.tree li a:hover + ul ul::before {
  border-color: #94a0b4;
}

.reading{
	background: #82056b;
}
.Listening{
	background: #791e59;
}
.Speakinig{
	background: #a71272;
}
.Writing{
	background: #dc0b92;

}
.dark{
	background: #2d051f;
}
.first{
	background: #f733d4;
}
code{
	color:#FFFFFF;
}
/*Thats all. I hope you enjoyed it.
Thanks :)*/




.tree1, .tree1 ul, .tree1 li {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
}

.tree1 {
    margin: 0 0 1em;
    text-align: center;
}
.tree1, .tree1 ul {
    display: table;
}
.tree1 ul {
  width: 100%;
}
    .tree1 li {
        display: table-cell;
        padding: .5em 0;
        vertical-align: top;
    }
        /* _________ */
        .tree1 li:before {
            outline: solid 1px #666;
            content: "";
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
        .tree1 li:first-child:before {left: 50%;}
        .tree1 li:last-child:before {right: 50%;}

        .tree1 code, .tree1 span {
            border: solid .1em #666;
            border-radius: .2em;
            display: inline-block;
            margin: 0 .2em .4em;
            padding: .2em .4em;
            position: relative;
        }
        /* If the tree1 represents DOM structure */
        .tree1 code {
            font-family: monaco, Consolas, 'Lucida Console', monospace;
        }

            /* | */
            .tree1 ul:before,
            .tree1 code:before,
            .tree1 span:before {
                outline: solid 1px #666;
                content: "";
                height: .5em;
                left: 50%;
                position: absolute;
            }
            .tree1 ul:before {
                top: -.5em;
            }
            .tree1 code:before,
            .tree1 span:before {
                top: -.55em;
            }

/* The root node doesn't connect upwards */
.tree1 > li {margin-top: 0;}
    .tree1 > li:before,
    .tree1 > li:after,
    .tree1 > li > code:before,
    .tree1 > li > span:before {
      outline: none;
    }



</style>


  <hr>

    <div class="container-fluid">
    <div class="row" style="padding:150px 50px 0px 50px">
        <h2 class="media-heading "><h2 class="bottom_line">
          <h2 class="media-heading "><h2 class="bottom_line"><span>What Is IELTS?</span></h2>
        </h2>
      </h2>
      <p>IELTS, or the International English Language Testing System (IELTS), is a complete test of all 4 language skills and it evaluates the ability of those willing to educate or be employed in any place where English is used as a language of correspondence in less than three hours.
            </p>
    </div>

  <div class="row" style="padding:10px 50px 0px 50px">
    <div class="col-md-12 ">
        <h2 class="media-heading ">
          <h2 >
          <span class="">What Are the IELTS Test Types and How This Test Is Administered?</span>
        </h2>
      </h4>
      <h5>There are two types of IELTS exam: </h5>
    </div>
    </div>

       <div class="row" style="padding: 37px;">
        <div class="col-md-6">

						<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
<div class="tree ">
	<ul>
		<li>
			<a href="#" class="first">IELTS Test Types</a>
			<ul>

				<li>
				<i class="fa fa-arrow-down" aria-hidden="true"></i>

					<!--<a href="#" class="dark">There are four section in this version</a>-->
					<ul>
						<li><a href="#" class="reading">Academic IELTS</a></li>
						<li>
							<a href="#" class="reading">General IELTS </a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>





        </div>
        <div class="col-md-6">
				<div class="">
          </div>
          <p>
            Both the General and the Academic versions of the IELTS test examine the test takers’ ability in four all 4 skills of Reading, Listening, Speaking, and Writing and the last two ones are the same in both types of exams; however, based on the type of test you take, the Reading and the Writing sections differ. Moreover, The Listening, Reading and Writing components of both IELTS test types are accomplished on the same day, with no breaks between them; however, the Speaking component can be fulfilled up to a week before or after the other skills and in this regard, your test center will inform you about the time that you should attend this section. 
          </p>
        </div>


       </div>

    
       <div class="row"  style="padding: 10px 50px 0px 50px;">
         <div class="col-md-12">
           <h3><span class="bottom_line">How can we interpret the IETLS band scores?</span></h3>
           <p>The first and the most significant point that should be taken into great consideration is that in this test, there is no passing or failing. In other words, the you are graded exactly based on your performance on the test day and you get your score ranging from 1 to 9 for each section of Listening, Reading, Writing and Speaking separately. Then, these four separate scores shape your final Overall Band Score.</p>
         </div>
       </div>
   


       <div class="row" style="padding: 10px 50px 0px 50px;">
         <div class="col-md-12">
           <h3 ><span class="bottom_line">What Is the IELTS Test format?</span></h3>
           <h2 style="color: #ff408e">Listening (30 minutes):</h2>
           <p>During the test, you will listen to four recordings of native English speakers and then you should write your responses to a series of questions.</p>
           <ul style="list-style-type: none;">
             <li>
               <i class="fa fa-hand-o-right" aria-hidden="true"></i> Recording 1 : 
               <p>A dialogue among two people set in an everyday social setting.</p>
             </li>
             <li>
               <i class="fa fa-hand-o-right" aria-hidden="true"></i> Recording 2 : 
               <p>A monologue set in an everyday social setting, e.g. a dialogue about local facilities.</p>
             </li>
             <li>
               <i class="fa fa-hand-o-right" aria-hidden="true"></i> Recording 3 : 
               <p>A discussion between up to four people set in an academic or training setting, e.g. a university instructor and a student conversing on an assignment.</p>
             </li>

             <li>
               <i class="fa fa-hand-o-right" aria-hidden="true"></i> Recording 4 : 
               <p>A monologue on an educational issue, e.g. a university speech.
Meanwhile, evaluators will be looking for proof of your capability to comprehend the main ideas and detailed genuine information, the attitudes and ideas of speakers, the objective of an expression and indication of your proficiency to follow the expansion of opinions.
.</p>
             </li>

             

           </ul>
         </div>
       </div>






      </div>
    <hr>



<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>Reading (60 minutes):</span></h2></h4>
            <p>The Reading part contains 40 questions, created to test an extensive range of reading skills. These comprise reading for gist, reading for main ideas, reading for detail, skimming, understanding logical argument and recognizing writers' opinions, attitudes and purpose.
            </p>

            <ul style="list-style-type: none;">
             <li>
               <i class="fa fa-certificate" aria-hidden="true"></i> IELTS Academic test
               <p>this section of the exam contains three long texts which vary from descriptive and factual to discursive and analytical texts. These are taken from books, journals, magazines and newspapers.  They have been chosen for an inexpert audience but are proper for people registering university courses or searching for professional enrollment.</p>
             </li>
              <li>
             <i class="fa fa-certificate" aria-hidden="true"></i> IELTS General Training test 
               <p>this part of the test contains excerpts from books, magazines, newspapers, notices, advertisements, company handbooks and guidelines. These are things you are expected to confront on a daily basis in an English-speaking atmosphere.</p>
             </li>

           </ul>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/developer.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>
  <hr>



<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>Academic writing (60 minutes):</span></h2></h2>
            <p>In this part of the test, subject matters are of common interest to, and appropriate for, test takers entering undergraduate and postgraduate studies or searching for professional enrollment.
            </p>

            <ul style="list-style-type: none;">
             <li>
               <i class="fa fa-certificate" aria-hidden="true"></i> Task 1
               <p>In this section, you will be confronted with a graph, table, chart or diagram and requested to describe, abridge or expound the information in your own words. You may be questioned to describe and explain data, describe the steps of a procedure, how something works or describe an object or occasion.</p>
             </li>
              <li>
             <i class="fa fa-certificate" aria-hidden="true"></i> Task 2
               <p>you will be requested to write a composition in response to a point of view, dispute or difficulty. Responses to both tasks must be in a formal way.</p>
             </li>

           </ul>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/developer.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>
  <hr>

  <div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>General Training Writing (60 minutes):</span></h2></h2>
            <p>Topics are of common interest and there are two tasks:
            </p>

            <ul style="list-style-type: none;">
             <li>
               <i class="fa fa-certificate" aria-hidden="true"></i> Task 1
               <p>you will be presented with a situation and requested to write a letter demanding information, or describing the situation. The letter may be private, semi-formal or formal in design.</p>
             </li>
              <li>
             <i class="fa fa-certificate" aria-hidden="true"></i> Task 2
               <p>you will be requested to write a composition in response to a point of view, dispute or difficulty. The composition can be equitably private in design.</p>
             </li>

           </ul>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/developer.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>
  <hr>


<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>Speaking (11–14 minutes):</span></h2></h2>
            <p>The speaking component measures your utilization of spoken English. Every test is recorded.
            </p>

            <ul style="list-style-type: none;">
             <li>
               <i class="fa fa-certificate" aria-hidden="true"></i> Part 1
               <p>the assessor will ask you overall questions about yourself and a variety of familiar issues, such as home, family, work, studies and interests. This part takes between four to five minutes.</p>
             </li>
              <li>
             <i class="fa fa-certificate" aria-hidden="true"></i> Part 2
               <p>you will be presented a card which asks you to discuss a specific subject. You will have one minute to prepare before speaking for up to two minutes. The assessor will then ask one or two questions on the identical subject.</p>
             </li>

             <li>
             <i class="fa fa-certificate" aria-hidden="true"></i> Part 3
               <p>you will be requested more questions about the topic in Part 2. These will give you the opportunity to converse more abstract opinions and subjects. This part of the test takes between four to five minutes.</p>
             </li>

           </ul>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/developer.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>

<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12" style="    padding: 59px;">
          <!--Footer Bottom-->
                            <!-- <h3 class="study_text" style="    color: rgb(60,90,118);"><b>STUDY WITH GROUP OF PROFESSIONALS</b></h3> -->
                            
                            <a class="btn btn-info btn-md mybtn1" style="
    padding: 15px;" id="btn_see" href="<?php echo base_url(); ?>/Courses/listcourse">SEE LIST OF COURSES</a>
                        


        </div>
      </div>
    </div>

  
  <hr>







<footer class="mainfooter" role="contentinfo">

  <div class="footer-bottom" >
    <div class="container">
      <div class="row">
        <div class="col-xs-12" style="    padding: 12px;">
          <!--Footer Bottom-->
                            <!-- <h3 class="study_text" style="    color: rgb(60,90,118);"><b>STUDY WITH GROUP OF PROFESSIONALS</b></h3> -->
                            
                        


        </div>
      </div>
    </div>
  </div>
</footer>


