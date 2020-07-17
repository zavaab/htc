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
	background: #713c5e;
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
	background: #653353;
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

<div class="container-fluid">
<div class="row" style="padding:150px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>What is TOEFL Test?</span></h2></h2>
            <p>TOEFL is an abbreviation of the Test of English as a Foreign Language and is an International English proficiency test conducted to evaluate the candidates’ ability to both communicate and comprehend English language by examining their ability to read, listen, speak and write in English. If you are an international student who desires to educate in an English speaking country at a university, you may need to take a TOEFL test.
            </p>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">


					 <img src="<?php echo base_url();?>assets/img/tofel/what.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">

  </div>




</div>
</div>
  <hr>

    <div class="container-fluid">
    <div class="row" style="padding:10px 50px 0px 50px">
        <h2 class="media-heading "><h2 class="bottom_line">
          <span>How many versions do we have in TOEFL test?</span>
        </h2>
      </h2>
    </div>

  <div class="row" style="padding:10px 50px 0px 50px">
    <div class="col-md-12 ">
        <h4 class="media-heading ">
          <h4 >
          <span class="">TOEFL has two main versions:</span>
        </h4>
      </h4>
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
			<a href="#" class="first">IBT(Internet base test)</a>
			<ul>

				<li>
				<i class="fa fa-arrow-down" aria-hidden="true"></i>

					<!--<a href="#" class="dark">There are four section in this version</a>-->
					<ul>
						<li><a href="#" class="reading">Reading</a></li>
						<li>
							<a href="#" class="Listening">Listening</a>
						</li>
						<li><a href="#" class="Speakinig">Speaking</a></li>
						<li><a href="#" class="Writing">Writing</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>





        </div>
        <div class="col-md-6">
				<div class="tree">
	<ul>
		<li>
			<a href="#" class="first">PBT(Paper base test)</a>
			<ul>

				<li>
					<!--<a href="#" class="dark">There are four section in this version</a>-->
					<i class="fa fa-arrow-down" aria-hidden="true"></i>
					<ul>
						<li><a href="#" class="reading">Reading</a></li>
						<li>
							<a href="#" class="Listening">Listening</a>
						</li>
						<li><a href="#" class="Speakinig">Speaking</a></li>
						<li><a href="#" class="Writing">Writing</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>

					
					
				
				
        </div>


       </div>


      </div>
    <hr>



<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>Who is the developer of TOEFL Test?</span></h2></h2>
            <p>TOEFL is an Educational Testing Service (ETS) trademark, a private non - profit organization that designs and administers the tests. ETS is a group of instruction specialists, analysts and evaluation engineers who accept that, through learning, individuals can move forward their circumstances in life and make unimaginable commitments to the world...
            </p>
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
        <h2 class="media-heading "><h2 class="bottom_line">
          <span>How can we register in TOEFL Test?</span>
        </h2>
      </h2>
    </div>

       <div class="row" style="padding: 37px;">
        <div class="col-md-6">
				<div class="tree">
								<ul>
									<li>
										<a href="#" class="first">TOEFL Registration</a>
										<ul>

											<li>
												<!--<a href="#" class="dark">There are four section in this version</a>-->
												<i class="fa fa-arrow-down" aria-hidden="true"></i>
												<ul>
													<li><a href="#" class="reading">Online</a></li>
													<li>
														<a href="#" class="Listening">by Email</a>
													</li>
													<li><a href="#" class="Speakinig">by Phone</a></li>
													<li><a href="#" class="Writing">in person</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
        </div>
         <div class="col-xs-12 col-md-6 col-lg-6 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/register.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>

       </div>


      </div>
    <hr>





<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>How is the TOEFL Test Score?</span></h2></h2>
            <p>Individual educational institutions have determined the necessities for the TOEFL score. The total test score for this test is between 0 and 120. The grades are valid for two years after the test and there are no limitations on the number of times you can take the test. The test scores will be announced online within two weeks of the test date.
            </p>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/tofel.png"
           style="width: 300px;height: 300px;" class="img-responsive" alt="Sample Image">
  </div>




</div>
</div>
  <hr>



<div class="container-fluid">
    <div class="row" style="padding:10px 50px 0px 50px">
        <h2 class="media-heading "><h2 class="bottom_line">
          <span>How is the structure of the TOEFL IBT Test?</span>
        </h2>
      </h2>
    </div>

       <div class="row" style="padding: 37px;">
        <div class="col-md-12 text-center">


				<figure>
      <ul class="tree1">
        <li><code class="first">TOEFL IBT TEST</code>
          <ul>
            <li ><code class="reading">Reading</code>
              <ul>
                <li><code  class="Writing" >Time Limit</code>
								<ul>
								<li><code class="Speakinig">60-80 minutes</code></li>
								</ul>
								</li>
                <li><code class="Writing">Questions</code>
								<ul>
								<li><code class="Speakinig">36-56 questions</code></li>
								</ul>
								</li>
								<li><code  class="Writing">Tasks</code>
								<ul>
								<li><code class="Speakinig">Read 3 or 4 passages from academic texts and answer questions.</code></li>
								</ul>
								</li>
								<li><code class="Writing">Score</code>
								<ul>
								<li><code class="Speakinig">0-30</code></li>
								</ul>
								</li>
              </ul>
            </li>
            <li><code class="reading">Listening</code>
						<ul>
						<li><code class="Writing">Time Limit</code>
						<ul>
						<li><code class="Speakinig">60-90 minutes</code></li>
						</ul>
						</li>
						<li><code class="Writing">Questions</code>
						<ul>
						<li><code class="Speakinig">36-56 questions</code></li>
						</ul>
						</li>
						<li><code class="Writing">Tasks</code>
						<ul>
						<li><code class="Speakinig">Listen to lectures, classroom discussions and conversations, then answer questions.</code></li>
						</ul>
						</li>
						<li><code class="Writing">Score</code>
						<ul>
						<li><code class="Speakinig">0-30</code></li>
						</ul>
						</li>
					</ul>
            </li>
			
			
           
           
          </ul>
        </li>
      </ul>
</figure>

        </div>
        </div>
		<!-- END ROW -->
		
		       <div class="row" style="padding: 37px;">
        <div class="col-md-12 text-center">


				<figure>
      <ul class="tree1">
        <li><code class="first">TOEFL IBT TEST</code>
          <ul>
		
            <li><code class="reading">Speaking</code>
			
						<ul>
						<li><code class="Writing">Time Limit</code>
						<ul>
						<li><code class="Speakinig">20 minutes</code></li>
						</ul>
						</li>
						<li><code class="Writing">Questions</code>
						<ul>
						<li><code class="Speakinig">6 tasks</code></li>
						</ul>
						</li>
						<li><code class="Writing">Tasks</code>
						<ul>
						<li><code class="Speakinig">Express an opinion on a familiar topic; speak based on reading and listening tasks.</code></li>
						</ul>
						</li>
						<li><code class="Writing">Score</code>
						<ul>
						<li><code class="Speakinig">0-30</code></li>
						</ul>
						</li>
					</ul>
            </li>
            <li><code class="reading">Writing</code>
						<ul>
						<li><code class="Writing">Time Limit</code>
						<ul>
						<li><code class="Speakinig">50 minutes</code></li>
						</ul>
						</li>
						<li><code class="Writing">Questions</code>
						<ul>
						<li><code class="Speakinig">2 tasks</code></li>
						</ul>
						</li>
						<li><code class="Writing">Tasks</code>
						<ul>
						<li><code class="Speakinig">Write essay responses based on reading and listening tasks; support an opinion in writing.</code></li>
						</ul>
						</li>
						<li><code class="Writing">Score</code>
						<ul>
						<li><code class="Speakinig">0-30</code></li>
						</ul>
						</li>
					</ul>
            </li>
          </ul>
        </li>
      </ul>
</figure>

        </div>
        </div>
		


       </div>


      </div>
    <hr>



<div class="container-fluid">
<div class="row" style="padding:10px 50px 0px 50px">

  <div class="col-xs-12 col-md-8 col-lg-8">
    <div class="media-body">
          <h2 class="media-heading "><h2 class="bottom_line"><span>What are the test contents?</span></h2></h2>
           <div class="card-body">
                  <h2><span class="bottom_line">Reading:</span></h2>
                  <p>The reading section measures the ability of the test takers to comprehend academic texts at the university level. TOEFL IBT test takers read three or four paragraphs of about 700 words each and answer 13 or 14 questions each. The paragraphs represent a wide range of academic fields and include all the information necessary to answer the questions, therefore they do not require any specific background.
                  The questions are designed to evaluate the ability of the test takers to apprehend realistic information, to figure out information from the paragraph, to understand vocabulary in context and to understand the purpose of the author. Other types of questions evaluate the ability of the test takers to distinguish relations between realities and opinions in different parts of the paragraph.
                  </p>
                  <h2><span class="bottom_line">Listening:</span></h2>
                  <p>The Listening section evaluates the ability of the test takers to understand spoken English in an academic environment. Test takers listen to 2 to 3 conversations and 4 to 6 lectures, lasting about 2 to 3 minutes for each conversation, representing typical campus communications with faculty, staff and fellow students, and 5 to 6 minutes for each lecture, representing various academic areas.
                  Each listening passage is linked to a series of questions created to evaluate the ability of test takers to understand key ideas or important details, to identify the approach or function of a speaker, to understand the organization of the presented information, to realize the relationships between the presented ideas, and make inferences or links between information elements.
                  </p>

                  <h2><span class="bottom_line">Speaking:</span></h2>
                  <p>The Speaking section measures the ability of applicants to use spoken English efficiently, both inside and outside the classroom. In the speaking part, there are six tasks. The test takers have two “independent” tasks and they should use their personal experience and opinions to reply to these questions. Test takers explain their personal experiences or ideas on a familiar topic in one task. They state and support an opinion from two opposing views on the other task.
                  The other four tasks, known as “integrated” tasks, require the test taker to use information in a short spoken text or both a short spoken text and a corresponding short written text. These four tasks evaluate integrated skills and require test takers to respond orally about things they listen to and read.
                  </p>
                  <h3>There are 6 questions and 20 minutes.</h3>
                  <strong>Independent (S) - Integrated (RLS) - Integrated (LS)</strong>
                  <ul>
                    <li>1.  Q 1 and 2: Independent(S): talk about a familiar topic, 15s preparation, 45s talk.</li>
                    <li>2.  Q3 and 4: Integrated (RLS): 45s Reading, 60-120s Listening, 30s preparation, 60s talk.</li>
                    <li>3.  Q 5 and 6: Integrated (LS): 60-120s Listening, 20s preparation, 60s talk.</li>
                  </ul>


                  <h2><span class="bottom_line">Writing:</span></h2>
                  <p>The writing section measures the ability of test takers to write in an academic environment and contains two tasks naming independent and integrated sections.
                  </p>

                  <h2><span class="bottom_line">Independent Writing Task:</span></h2>
                  <p>For the Independent Writing task, test takers will get a question on a specific subject or issue. They will have 30 minutes to develop and compose an answer to that subject that clarifies their attitude on it. Test takers ought to provide reasons that support their decision. It is suggested that their answer to this task be at least 300 words. They will be evaluated on how well they create their opinions, how well their essay is organized, and how precisely they utilize English to elucidate their ideas.
                  </p>
                  <h2><span class="bottom_line">Integrated Writing Task:</span></h2>
                  <p>Test takers first read a passage on an academic topic in this task. Then they listen to part of a lecture evaluating and criticizing the information and arguments presented in the lecture. Finally, test takers must write a summary of the important items in the lecture, explaining how these items relate to those in the passage.
                  Test developers carefully design integrated tasks for both the speaking and the writing segments to make sure that information from both listening and reading materials is taken into account in an effective response.

                  </p>
                </div>
        </div>
        </div>


  <div class="col-xs-12 col-md-4 col-lg-4 text-right">
    <img src="<?php echo base_url();?>assets/img/tofel/content.png"
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



