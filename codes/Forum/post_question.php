<div align="center">
<script src="java/java.js" type="text/javascript"></script>
<form name="post_question" action="post_question_process.php" method="post">
<center>    
<table width="70%" height="135" border="0px" cellpadding="5px" cellspacing="5px" id="question_form" style="visibility:visible;">
  <tr>
    <td>Question:</td>
 	<td><textarea name="question" cols="79" rows="4" class="question" id="question"></textarea></td>
  </tr>
  
  <tr>
  		<td>Category:</td>
  		<td>
  
  <select name="category" id="category" class="question" onchange="javascript: categoryexpand();">
  <option value="Unspecified">Academic Level of Your Question</option>
  <option value="school">School</option>
  <option value="plus2">+2/I.Sc</option>
  <option value="bachelors">Bachelors (e.g B.Sc)</option>
  <option value="masters">Master's (e.g M.Sc)</option>
  <option value="engineering">Engineering</option>
  </select>
  
  <select name="topic" id="topic" class="question">
  <option value="Unspecified">Topics</option>
  </select>
  
  		</td>
  </tr>
  <tr>
    <td height="32">Image:</td>
    <td>
    <input name="questionimage" type="file" size="70" class="question" disabled="disabled"/>
	<br>
	<input type="submit" value="Ask..." />	
	</td>
  </tr>


</form>

  </tr>
<form action="post_question_process.php" method="post">  
<tr>
<td>
<center>Initiate Discussion:</center></td>
<td>
<input type="hidden" value="discussion" name="category">
<input type="hidden" value="discussion" name="topic">

<textarea rows="4" cols="79" class="question" name="question"></textarea><br><input type="submit" value="Initiate">
</td>
</tr>
</form>  
  </table>

</div>