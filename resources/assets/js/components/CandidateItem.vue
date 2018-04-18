<style>
input[type=checkbox]{
	height: 0;
	width: 0;
	visibility: hidden;
}

label {
	cursor: pointer;
	text-indent: -9999px;
	width: 200px;
	height: 100px;
	background: grey;
	display: block;
	border-radius: 100px;
	position: relative;
}

label:after {
	content: '';
	position: absolute;
	top: 5px;
	left: 5px;
	width: 90px;
	height: 90px;
	background: #fff;
	border-radius: 90px;
	transition: 0.3s;
}

input:checked + label {
	background: #bada55;
}

input:checked + label:after {
	left: calc(100% - 5px);
	transform: translateX(-100%);
}

label:active:after {
	width: 130px;
}

</style>

<template>
    <div class="ml-3 bg-blue-light max-w-xs rounded overflow-hidden shadow-lg my-2">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Valencia, Vicente Jr.</div>
            <p class="text-grey-darker text-base">
                Brgy. Captain
                <input type="checkbox" id="switch"><label for="switch">Vote</label>
            </p>
            
        </div>
    </div>
</template>

<script>
    
</script>