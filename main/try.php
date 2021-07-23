<?php
						$dbid = 17;
						$querycomments = mysql_query("SELECT * FROM obbs.comments WHERE postid = '$dbid'");
						
						$numrowcom = mysql_num_rows($querycomments);
						
						if($numrowcom > 0){
							while($rowcom = mysql_fetch_assoc($querycomments)){
								$dbcomid = $rowcom['id'];
								$dbcomuserid = $rowcom['userid'];
								$dbcompostid = $rowcom['postid'];
								$dbcomment = $rowcom['text'];
								echo $dbcomment;
							}
							
						}
						else if ($numrowcom == 0){
							echo 'no comments!';
						}
						echo '</div>';

?>