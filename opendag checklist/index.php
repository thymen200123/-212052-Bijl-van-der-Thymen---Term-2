<!DOCTYPE html>
<html>

	<head>

		<title>checklist</title>
		<link rel="icon" href="logo.png">
	</head>

	<style>
		body {
			font-size: 16pt;
		    background-image: url(achtergrond.png);
		    background-repeat: no-repeat;
		    background-size: 100% 120%;
		}
		p {
			color:black;
		}
		[type=radio] {
		    width: 20px;
		    height: 20px;
		}
		table {
			 background: rgba(255,255,255,0.5)
		}
	</style>
	
	<body>
		<img src="logo.png">
		<h1>Welkom bij de checklist.</h1>
		<p>Graag zo eerlijk mogelijk invullen.
		Er zijn bij elke vraag drie antwoorden mogelijk: ja/nee/beetje.</p>

		<table cellspacing="10">
			<tr>
				<td colspan="4"><h1>CHECKLIST</h1>
				</td>
			</tr>

			<tr>
				<td>Question</td>
				<td><p>Nee    </p></td>
				<td><p>Beetje</p></td>
				<td><p>Ja    </p></td>
			</tr>

			<tr>
				<td>Hoe goed zijn je comunicative vaardigheden?</td>
				<td><input type="radio" name="com" value="nee"></td>
				<td><input type="radio" name="com" value="beetje"></td>
				<td><input type="radio" name="com" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je veel geduld?</td>
				<td><input type="radio" name="geduld" value="nee"></td>
				<td><input type="radio" name="geduld" value="beetje"></td>
				<td><input type="radio" name="geduld" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je motivatie voor deze opleiding?</td>
				<td><input type="radio" name="moti" value="nee"></td>
				<td><input type="radio" name="moti" value="beetje"></td>
				<td><input type="radio" name="moti" value="ja"></td>
			</tr>

			<tr>
				<td>Kun je in een team werken?</td>
				<td><input type="radio" name="team" value="nee"></td>
				<td><input type="radio" name="team" value="beetje"></td>
				<td><input type="radio" name="team" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je interesse in technologie?</td>
				<td><input type="radio" name="tech" value="nee"></td>
				<td><input type="radio" name="tech" value="beetje"></td>
				<td><input type="radio" name="tech" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je oplossingsgericht?</td>
				<td><input type="radio" name="oplos" value="nee"></td>
				<td><input type="radio" name="oplos" value="beetje"></td>
				<td><input type="radio" name="oplos" value="ja"></td>
			</tr>

			<tr>
				<td>Kun je goed tegen stress en frustratie?</td>
				<td><input type="radio" name="stfr" value="nee"></td>
				<td><input type="radio" name="stfr" value="beetje"></td>
				<td><input type="radio" name="stfr" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je gemotiveerd om te leren?</td>
				<td><input type="radio" name="leren" value="nee"></td>
				<td><input type="radio" name="leren" value="beetje"></td>
				<td><input type="radio" name="leren" value="ja"></td>
			</tr>

			<tr>
				<td>Kan je logisch denken?</td>
				<td><input type="radio" name="denken" value="nee"></td>
				<td><input type="radio" name="denken" value="beetje"></td>
				<td><input type="radio" name="denken" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je veel motivatie voor zelfstudie?</td>
				<td><input type="radio" name="zelf" value="nee"></td>
				<td><input type="radio" name="zelf" value="beetje"></td>
				<td><input type="radio" name="zelf" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je een gepassioneerd computer gebruiker?</td>
				<td><input type="radio" name="comp" value="nee"></td>
				<td><input type="radio" name="comp" value="beetje"></td>
				<td><input type="radio" name="comp" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je goed in de Engelse taal</td>
				<td><input type="radio" name="eng" value="nee"></td>
				<td><input type="radio" name="eng" value="beetje"></td>
				<td><input type="radio" name="eng" value="ja"></td>
			</tr>

		</table>

		<textarea rows="4" cols="50" placeholder="Vul hier je antwoord in."></textarea>
		
		<button name="submit" type="Submit" value="submit">Submit</button>
	
	</body>

</html>