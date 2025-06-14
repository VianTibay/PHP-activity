<!-- 1.	The student will create a student registration form using HTML and CSS with the integration of PHP Scripts please refer to the attached image for the example.
a.	All user entries from the student registration form will be converted in variables
b.	In the output, they need to call for the declared variables and do some string formats like name cases and numbers -->

<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Student Registration Form</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap" rel="stylesheet" />
<style>
body {
font-family: 'Times New Roman', serif;
}
</style>
</head>
<body class="bg-white flex justify-center items-start py-10">
<div class="w-full max-w-[700px] border border-black p-4">
<h2 class="text-center font-bold text-lg mb-4">Student Registration Form</h2>
<form class="text-[9px] leading-[1]">
<table class="w-full border border-black border-collapse mb-2">
<tbody>
<tr>
<td class="border border-black px-1 py-0.5" style="width: 30%;">Matanuska-Susitna Borough</td>
<td class="border border-black px-1 py-0.5" style="width: 20%;">Date ____________</td>
<td class="border border-black px-1 py-0.5" style="width: 10%;">C#</td>
<td class="border border-black px-1 py-0.5" style="width: 10%;">Code</td>
<td class="border border-black px-1 py-0.5" style="width: 10%;">Code</td>
<td class="border border-black px-1 py-0.5" style="width: 10%;">Code</td>
<td class="border border-black px-1 py-0.5" style="width: 10%;">Code</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="2">Student's Name ___________________________________________</td>
<td class="border border-black px-1 py-0.5" colspan="2">Birthdate ___________ Age _____</td>
<td class="border border-black px-1 py-0.5" colspan="3">Grade ___________ School ____________________________ Phone ___________</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="7">City ___________________________________________ State __________ Zip ___________ Birthplace ___________________________</td>
</tr>
</tbody>
</table>

<table class="w-full border border-black border-collapse mb-2">
<tbody>
<tr>
<td class="bg-gray-900 text-white text-[8px] font-bold px-1 py-0.5" colspan="7">Residence Information (If different from above, please include P.O. Box)</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" style="width: 25%;">Street Address</td>
<td class="border border-black px-1 py-0.5" style="width: 25%;">City</td>
<td class="border border-black px-1 py-0.5" style="width: 15%;">State</td>
<td class="border border-black px-1 py-0.5" style="width: 35%;">Telephone</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5">_________________________________________________________</td>
<td class="border border-black px-1 py-0.5">_________________</td>
<td class="border border-black px-1 py-0.5">______</td>
<td class="border border-black px-1 py-0.5">__________________________</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="2">Parent/Guardian</td>
<td class="border border-black px-1 py-0.5" colspan="2">Employer</td>
<td class="border border-black px-1 py-0.5" colspan="3">Telephone</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="2">_________________________________________________________</td>
<td class="border border-black px-1 py-0.5" colspan="2">_________________________________________________________</td>
<td class="border border-black px-1 py-0.5" colspan="3">__________________________</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="7" style="font-size: 7px;">The parent or guardian must sign the registration form. (See page 2 for signature and date)</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="7" style="font-size: 7px;">Mother's Maiden Name: ___________________________</td>
</tr>
</tbody>
</table>

<table class="w-full border border-black border-collapse mb-2 text-[8px]">
<tbody>
<tr>
<td class="bg-gray-900 text-white font-bold px-1 py-0.5" colspan="7">Name of School Attended (K-12), School District, Dates Attended, Children in Family, Number of Children, Other</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="7" style="height: 20px;"></td>
</tr>
</tbody>
</table>

<table class="w-full border border-black border-collapse mb-2 text-[8px]">
<tbody>
<tr>
<td class="bg-gray-900 text-white font-bold px-1 py-0.5" colspan="7">Parent Information</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" style="width: 25%;">Name of Father/Guardian</td>
<td class="border border-black px-1 py-0.5" style="width: 25%;">Work or Business Address</td>
<td class="border border-black px-1 py-0.5" style="width: 25%;">Name of Mother/Guardian</td>
<td class="border border-black px-1 py-0.5" style="width: 25%;">Work or Business Address</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5">_________________________________________</td>
<td class="border border-black px-1 py-0.5">_________________________________________</td>
<td class="border border-black px-1 py-0.5">_________________________________________</td>
<td class="border border-black px-1 py-0.5">_________________________________________</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="2">Language of Student: Choose: ___ English ___ Other</td>
<td class="border border-black px-1 py-0.5" colspan="2">Number in Family: ______</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="4" style="font-size: 7px;">Did the student ever attend a Matanuska Region District School Board school in the past? ( ) Yes ( ) No. If yes, name school(s): ___________________________________________________________</td>
</tr>
</tbody>
</table>

<table class="w-full border border-black border-collapse mb-2 text-[8px]">
<tbody>
<tr>
<td class="bg-gray-900 text-white font-bold px-1 py-0.5" colspan="7">Health Information</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="7" style="height: 20px;">Does the student have any physical or mental problems or conditions? If yes, explain: ____________________________________________________________________________________________</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" style="width: 50%;">For school use: Immunization record provided: ( ) Yes ( ) No</td>
<td class="border border-black px-1 py-0.5" style="width: 50%;">Does the student require any special help? ( ) Yes ( ) No</td>
</tr>
</tbody>
</table>

<table class="w-full border border-black border-collapse mb-2 text-[8px]">
<tbody>
<tr>
<td class="bg-gray-900 text-white font-bold px-1 py-0.5" colspan="7">Citizenship Information</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" style="width: 40%;">Birth Country ___________________________</td>
<td class="border border-black px-1 py-0.5" style="width: 40%;">Current Permanent Address ___________________________</td>
<td class="border border-black px-1 py-0.5" style="width: 20%;">Date __________________</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="3" style="font-size: 7px;">I hereby certify that the above information is correct to the best of my knowledge.</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="3" style="height: 20px;"></td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="3" style="font-size: 7px;">Citizenship Status (Check one):</td>
</tr>
<tr>
<td class="border border-black px-1 py-0.5" colspan="3" style="height: 60px;">
<div class="flex flex-wrap gap-2 text-[7px]">
<label><input type="checkbox" class="mr-1" /> U.S. Citizen</label>
<label><input type="checkbox" class="mr-1" /> Native American</label>
<label><input type="checkbox" class="mr-1" /> Refugee/Immigrant</label>
<label><input type="checkbox" class="mr-1" /> Dual Citizenship</label>
<label><input type="checkbox" class="mr-1" /> Refugee Claimant</label>
<label><input type="checkbox" class="mr-1" /> Other (specify) ___________________________</label>
<label><input type="checkbox" class="mr-1" /> Undocumented Alien</label>
</div>
</td>
</tr>
</tbody>
</table>
</form>
</div>
</body>
</html>