@extends('template-admin')
@section('navbar_menu_resume', 'bg-primary text-white')
@section('main')
    <div class="mx-3 mt-5 rounded bg-dark text-white">
        <h1 class="text-center">Edit Resume</h1>
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/register-resume"
            method="post">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="theme" class="form-label">ID Undangan</label>
                        <input type="text" class="form-control @error('theme') is-invalid @enderror" id="theme"
                            name="theme" value="{{ old('theme') }}" placeholder="Tema Undangan">
                        @error('theme')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <h1 class="text-center">Registrasi</h1>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nama Lengkap<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname"
                        value="{{ old('fullname') }}" placeholder="Nama Lengkap">
                    @error('fullname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nickname" class="form-label">Nama Panggilan<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('nickname') is-invalid @enderror" id="nickname" name="nickname"
                        value="{{ old('nickname') }}" placeholder="Nama Panggilan">
                    @error('nickname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                        value="{{ old('phone') }}" placeholder="Nomor Telepon">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat Lengkap<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                        value="{{ old('address') }}" placeholder="Alamat Lengkap">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="birth" class="form-label">Tempat, Tanggal Lahir<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('birth') is-invalid @enderror" id="birth" name="birth"
                        value="{{ old('birth') }}" placeholder="Tempat, Tanggal Lahir">
                    @error('birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website"
                        value="{{ old('website') }}" placeholder="Website">
                    @error('website')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="freelance" class="form-label">Freelance<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('freelance') is-invalid @enderror" id="freelance" name="freelance"
                        value="{{ old('freelance') }}" placeholder="Freelance">
                    @error('freelance')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Foto Profil<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo"
                        value="{{ old('photo') }}" placeholder="Foto Profil">
                    @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nationality" class="form-label">Negara Asal<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('nationality') is-invalid @enderror" id="nationality"
                        name="nationality" value="{{ old('nationality') }}" placeholder="Negara Asal">
                    @error('nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('fax') is-invalid @enderror" id="fax" name="fax"
                        value="{{ old('fax') }}" placeholder="Fax">
                    @error('fax')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="job" class="form-label">Pekerjaan<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job"
                        value="{{ old('job') }}" placeholder="Pekerjaan">
                    @error('job')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="aboutme" class="form-label">About Me<a style="color:orange;">(Wajib)</a></label>
                    <input type="text" class="form-control @error('aboutme') is-invalid @enderror" id="aboutme" name="aboutme"
                        value="{{ old('aboutme') }}" placeholder="About Me">
                    @error('aboutme')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
            
              <div class="col-md-2"></div>

              <div class="col-md-5">
                <h1 class="text-center">Sosial Media</h1>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" name="linkedin"
                        value="{{ old('linkedin') }}" placeholder="Linkedin">
                    @error('linkedin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram"
                        value="{{ old('instagram') }}" placeholder="Instagram">
                    @error('instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"
                        value="{{ old('facebook') }}" placeholder="Facebook">
                    @error('facebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"
                        value="{{ old('twitter') }}" placeholder="Twitter">
                    @error('twitter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="github" class="form-label">Github</label>
                    <input type="text" class="form-control @error('github') is-invalid @enderror" id="github" name="github"
                        value="{{ old('github') }}" placeholder="Github">
                    @error('github')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>  
            </div>

            <div class="row">
                <h1 class="text-center">Skill & Experience</h1>
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="canido" class="form-label">CAN I DO</label>
                            {{-- add button add canido --}}
                            <div class="btn btn-success my-2" onclick="addCanido()">Add Can I Do</div>
                            <div class="row" id="canido-container">
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="canido-0"
                                    placeholder="name"
                                    oninput="updateCanidoArray('0', 'name', this.value)">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="canido-icon-0"
                                    placeholder="icon"
                                        oninput="updateCanidoArray('0', 'icon', this.value)">
                                </div>
                                <div class="mb-3 col-md-2">
                                    <button type="button" class="btn btn-danger" id="canido-delete-0" onclick="removeCanido('0')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <input style="display: none" type="text" class="form-control" id="canido" name="canido" value='{"data":[{"name":"","icon":""}]}' placeholder="Can I Do" readonly>
                            </div>

                            <script>
                                function updateCanidoArray(index, key, value) {
                                    // alert('index: ' + index + ', key: ' + key + ', value: ' + value)
                                    // Update the canido array dynamically
                                    var canidoContainer = document.getElementById('canido-container');
                                    var canidoInput = document.getElementById('canido');
                                    var canido = JSON.parse(canidoInput.value);
                    
                                    // alert(value);
                                    
                                    // alert(canido['data'][index][key])

                                    // Update the canido array
                                    canido['data'][index][key] = value;
                    
                                    // Update the value in the readonly input field
                                    canidoInput.value = JSON.stringify(canido);
                    
                                    // You can also send the updated array to the server using AJAX if needed
                                }

                                function removeCanido(index) {
                                    // alert('index: ' + index)
                                    // Update the canido array dynamically
                                    var canidoContainer = document.getElementById('canido-container');
                                    var canidoInput = document.getElementById('canido');
                                    var canido = JSON.parse(canidoInput.value);
                    
                                    // Remove the canido array
                                    // canido['data'].splice(index, 1);
                                    canido['data'][index] = [];
                    
                                    // Update the value in the readonly input field
                                    canidoInput.value = JSON.stringify(canido);

                                    // Remove the HTML element
                                    var canidoElement = document.getElementById('canido-' + index);
                                    canidoElement.parentNode.removeChild(canidoElement);

                                    var canidoIconElement = document.getElementById('canido-icon-' + index);
                                    canidoIconElement.parentNode.removeChild(canidoIconElement);
                    
                                    var canidoDeleteElement = document.getElementById('canido-delete-' + index);
                                    canidoDeleteElement.parentNode.removeChild(canidoDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed
                                }

                                function addCanido(){
                                    // alert('index: ' + index)
                                    // Update the canido array dynamically
                                    var canidoContainer = document.getElementById('canido-container');
                                    var canidoInput = document.getElementById('canido');
                                    var canido = JSON.parse(canidoInput.value);
                    
                                    // Remove the canido array
                                    // canido['data'].splice(index, 1);

                                    // {"name":"Graphic Design","icon":"icon flaticon-layers-icon"}
                                    canido['data'][canido['data'].length] = {"name":"","icon":""};
                    
                                    // Update the value in the readonly input field
                                    canidoInput.value = JSON.stringify(canido);

                                    var position = canido['data'].length - 1;

                                    // Add the HTML element
                                    var canidoElement = document.createElement('div');
                                    canidoElement.setAttribute('class', 'mb-3 col-md-5');
                                    canidoElement.innerHTML = '<input type="text" class="form-control" id="canido-' + position + '" name="canido-' + position + '" value="" placeholder="Can I Do" oninput="updateCanidoArray(\'' + position + '\', \'name\', this.value)">';

                                    var canidoIconElement = document.createElement('div');
                                    canidoIconElement.setAttribute('class', 'mb-3 col-md-5');
                                    canidoIconElement.innerHTML = '<input type="text" class="form-control" id="canido-icon-' + position + '" name="canido-icon-' + position + '" value="" placeholder="Can I Do" oninput="updateCanidoArray(\'' + position + '\', \'icon\', this.value)">';

                                    var canidoDeleteElement = document.createElement('div');
                                    canidoDeleteElement.setAttribute('class', 'mb-3 col-md-2');
                                    canidoDeleteElement.innerHTML = '<button type="button" class="btn btn-danger" id="canido-delete-' + position + '" onclick="removeCanido(\'' + position + '\')"><i class="fa fa-trash"></i></button>';
                                    
                                    canidoContainer.appendChild(canidoElement);
                                    canidoContainer.appendChild(canidoIconElement);
                                    canidoContainer.appendChild(canidoDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed
                                }
                            </script>
                        </div>

                        <div class="col-md-6">
                            <label for="canido" class="form-label">Skill</label>
                            {{-- add button add canido --}}
                            <div class="btn btn-success my-2" onclick="addSkill()">Add Skill</div>
                            <div class="row" id="skill-container">
                                    <div class="mb-3 col-md-5">
                                        <input type="text" class="form-control" id="skill-0"
                                        placeholder="name"
                                        oninput="updateSkillArray('0', 'name', this.value)">
                                    </div>
                                    <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="skill-percentage-0"
                                        placeholder="percentage"
                                        oninput="updateSkillArray('0', 'percentage', this.value)">
                                    </div>
                                    <div class="mb-3 col-md-2">
                                    <button type="button" class="btn btn-danger" id="skill-delete-0" onclick="removeSkill('0')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <input style="display: none" type="text" class="form-control" id="skill" name="skill" value='{"data":[{"name":"","percentage":""}]}' placeholder="Skill" readonly>
                            </div>

                            <script>
                                function updateSkillArray(index, key, value) {
                                    // alert('index: ' + index + ', key: ' + key + ', value: ' + value)
                                    // Update the skill array dynamically
                                    var skillContainer = document.getElementById('skill-container');
                                    var skillInput = document.getElementById('skill');
                                    var skill = JSON.parse(skillInput.value);
                    
                                    // alert(value);
                                    
                                    // alert(skill['data'][index][key])
    
                                    // Update the skill array
                                    skill['data'][index][key] = value;
                    
                                    // Update the value in the readonly input field
                                    skillInput.value = JSON.stringify(skill);
                    
                                    // You can also send the updated array to the server using AJAX if needed
                                }
    
                                function removeSkill(index) {
                                    // alert('index: ' + index)
                                    // Update the skill array dynamically
                                    var skillContainer = document.getElementById('skill-container');
                                    var skillInput = document.getElementById('skill');
                                    var skill = JSON.parse(skillInput.value);
                    
                                    // Remove the skill array
                                    // skill['data'].splice(index, 1);
                                    skill['data'][index] = [];
                    
                                    // Update the value in the readonly input field
                                    skillInput.value = JSON.stringify(skill);
    
                                    // Remove the HTML element
                                    var skillElement = document.getElementById('skill-' + index);
                                    skillElement.parentNode.removeChild(skillElement);
    
                                    var skillIconElement = document.getElementById('skill-percentage-' + index);
                                    skillIconElement.parentNode.removeChild(skillIconElement);
                    
                                    var skillDeleteElement = document.getElementById('skill-delete-' + index);
                                    skillDeleteElement.parentNode.removeChild(skillDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed
                                }
    
                                function addSkill(){
                                    // alert('index: ' + index)
                                    // Update the skill array dynamically
                                    var skillContainer = document.getElementById('skill-container');
                                    var skillInput = document.getElementById('skill');
                                    var skill = JSON.parse(skillInput.value);
                    
                                    // Remove the skill array
                                    // skill['data'].splice(index, 1);
    
                                    // {"name":"Graphic Design","icon":"icon flaticon-layers-icon"}
                                    skill['data'][skill['data'].length] = {"name":"","percentage":""};
                    
                                    // Update the value in the readonly input field
                                    skillInput.value = JSON.stringify(skill);
    
                                    var position = skill['data'].length - 1
                                    
                                    // Add the HTML element
                                    var skillElement = document.createElement('div');
                                    skillElement.setAttribute('class', 'mb-3 col-md-5');
                                    skillElement.innerHTML = '<input type="text" class="form-control" id="skill-' + position + '" name="skill-' + position + '" value="" placeholder="Skill" oninput="updateSkillArray(\'' + position + '\', \'name\', this.value)">';
    
                                    var skillPercentageElement = document.createElement('div');
                                    skillPercentageElement.setAttribute('class', 'mb-3 col-md-5');
                                    skillPercentageElement.innerHTML = '<input type="text" class="form-control" id="skill-percentage-' + position + '" name="skill-percentage-' + position + '" value="" placeholder="Skill" oninput="updateSkillArray(\'' + position + '\', \'percentage\', this.value)">';
    
                                    var skillDeleteElement = document.createElement('div');
                                    skillDeleteElement.setAttribute('class', 'mb-3 col-md-2');
                                    skillDeleteElement.innerHTML = '<button type="button" class="btn btn-danger" id="skill-delete-' + position + '" onclick="removeSkill(\'' + position + '\')"><i class="fa fa-trash"></i></button>';
    
                                    skillContainer.appendChild(skillElement);
                                    skillContainer.appendChild(skillPercentageElement);
                                    skillContainer.appendChild(skillDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed
                                }
                            </script>
                        </div>

                    </div>
                    

                  </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        
                        <div class="col-md-6">
                            
                            <label for="educational" class="form-label">Educational</label>
                            {{-- add button add educational --}}
                            <div class="btn btn-success my-2" onclick="addEducational()">Add Educational</div>
                            <div class="row" id="educational-container">
                                
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="educational-0"
                                            {{-- name="educational-0"  --}}
                                            placeholder="degree"
                                            oninput="updateEducationalArray('0', 'degree', this.value)">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="educational-university-0"
                                            {{-- name="educational-university-0"  --}}
                                            placeholder="university"
                                            oninput="updateEducationalArray('0', 'university', this.value)">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="educational-year-0"
                                            {{-- name="educational-year-0"  --}}
                                            placeholder="year"
                                            oninput="updateEducationalArray('0', 'year', this.value)">
                                </div>
                                <div class="mb-5 col-md-5">
                                    <input type="text" class="form-control" id="educational-description-0"
                                            {{-- name="educational-description-0"  --}}
                                            placeholder="description"
                                            oninput="updateEducationalArray('0', 'description', this.value)">
                                </div>
                                <div class="mb-5 col-md-2">
                                    <button type="button" class="btn btn-danger" id="educational-delete-0" onclick="removeEducational('0')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                
                            </div>
                            <div class="mb-3 col-md-12">
                                <input style="display: none" type="text" class="form-control" id="educational" name="educational" value='{"data":[{"degree":"","university":"","year":"","description":""}]}'
                                        placeholder="Can I Do" readonly>
                            </div>
                            
                    
                            <script>
                                function updateEducationalArray(index, key, value) {
                                    // alert('index: ' + index + ', key: ' + key + ', value: ' + value)
                                    // Update the educational array dynamically
                                    var educationalContainer = document.getElementById('educational-container');
                                    var educationalInput = document.getElementById('educational');
                                    var educational = JSON.parse(educationalInput.value);
                    
                                    // alert(value);
                                    
                                    // alert(educational['data'][index][key])
    
                                    // Update the educational array
                                    educational['data'][index][key] = value;
                    
                                    // Update the value in the readonly input field
                                    educationalInput.value = JSON.stringify(educational);
                    
                                    // You can also send the updated array to the server using AJAX if needed
                                }
    
                                function removeEducational(index) {
                                    // alert('index: ' + index)
                                    // Update the canido array dynamically
                                    var educationalContainer = document.getElementById('educational-container');
                                    var educationalInput = document.getElementById('educational');
                                    var educational = JSON.parse(educationalInput.value);
                    
                                    // Remove the educational array
                                    // educational['data'].splice(index, 1);
                                    educational['data'][index] = [];
                    
                                    // Update the value in the readonly input field
                                    educationalInput.value = JSON.stringify(educational);
    
                                    // Remove the HTML element
                                    var educationalElement = document.getElementById('educational-' + index);
                                    educationalElement.parentNode.removeChild(educationalElement);
    
                                    var educationalIconElement = document.getElementById('educational-university-' + index);
                                    educationalIconElement.parentNode.removeChild(educationalIconElement);
    
                                    var educationalYearElement = document.getElementById('educational-year-' + index);
                                    educationalYearElement.parentNode.removeChild(educationalYearElement);
    
                                    var educationalDescriptionElement = document.getElementById('educational-description-' + index);
                                    educationalDescriptionElement.parentNode.removeChild(educationalDescriptionElement);
    
                                    var educationalDeleteElement = document.getElementById('educational-delete-' + index);
                                    educationalDeleteElement.parentNode.removeChild(educationalDeleteElement);
    
                                    // You can also send the updated array to the server using AJAX if needed
                                }
    
                                function addEducational(){
                                    // alert('index: ' + index)
                                    // Update the educational array dynamically
                                    var educationalContainer = document.getElementById('educational-container');
                                    var educationalInput = document.getElementById('educational');
                                    var educational = JSON.parse(educationalInput.value);
                    
                                    // Remove the educational array
                                    // educational['data'].splice(index, 1);
    
                                    // {"name":"Graphic Design","icon":"icon flaticon-layers-icon"}
                                    educational['data'][educational['data'].length] = {"degree":"","university":"","year":"","description":""};
                    
                                    // Update the value in the readonly input field
                                    educationalInput.value = JSON.stringify(educational);
    
                                    var position = educational['data'].length - 1;
    
                                    // Add the HTML element
                                    var educationalElement = document.createElement('div');
                                    educationalElement.setAttribute('class', 'mb-3 col-md-5');
                                    educationalElement.innerHTML = '<input type="text" class="form-control" id="educational-' + position + '" name="educational-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'degree\', this.value)">';
    
                                    var educationalUniversityElement = document.createElement('div');
                                    educationalUniversityElement.setAttribute('class', 'mb-3 col-md-5');
                                    educationalUniversityElement.innerHTML = '<input type="text" class="form-control" id="educational-university-' + position + '" name="educational-university-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'university\', this.value)">';
    
                                    var educationalYearElement = document.createElement('div');
                                    educationalYearElement.setAttribute('class', 'mb-3 col-md-5');
                                    educationalYearElement.innerHTML = '<input type="text" class="form-control" id="educational-year-' + position + '" name="educational-year-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'year\', this.value)">';
    
                                    var educationalDescriptionElement = document.createElement('div');
                                    educationalDescriptionElement.setAttribute('class', 'mb-3 col-md-5');
                                    educationalDescriptionElement.innerHTML = '<input type="text" class="form-control" id="educational-description-' + position + '" name="educational-description-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'description\', this.value)">';
    
                                    var educationalDeleteElement = document.createElement('div');
                                    educationalDeleteElement.setAttribute('class', 'mb-3 col-md-2');
                                    educationalDeleteElement.innerHTML = '<button type="button" class="btn btn-danger" id="educational-delete-' + position + '" onclick="removeEducational(\'' + position + '\')"><i class="fa fa-trash"></i></button>';
    
                                    educationalContainer.appendChild(educationalElement);
                                    educationalContainer.appendChild(educationalUniversityElement);
                                    educationalContainer.appendChild(educationalYearElement);
                                    educationalContainer.appendChild(educationalDescriptionElement);
                                    educationalContainer.appendChild(educationalDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed
    
                                    
                                }
                            </script>
                    
                        </div>
    
                        <div class="col-md-6">
                            <label for="canido" class="form-label">working</label>
                            {{-- add button add canido --}}
                            <div class="btn btn-success my-2" onclick="addWorking()">Add working</div>
                            <div class="row" id="working-container">
                                
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="working-0"
                                            {{-- name="working-0"  --}}
                                            placeholder="position"
                                            oninput="updateWorkingArray('0', 'position', this.value)">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="working-company-0"
                                            {{-- name="working-company-0"  --}}
                                            placeholder="company"
                                            oninput="updateWorkingArray('0', 'company', this.value)">
                                </div>
                                <div class="mb-3 col-md-5">
                                    <input type="text" class="form-control" id="working-year-0"
                                            {{-- name="working-year-0"  --}}
                                            placeholder="year"
                                            oninput="updateWorkingArray('0', 'year', this.value)">
                                </div>
                                <div class="mb-5 col-md-5">
                                    <input type="text" class="form-control" id="working-description-0"
                                            {{-- name="working-description-0"  --}}
                                            placeholder="description"
                                            oninput="updateWorkingArray('0', 'description', this.value)">
                                </div>
                                <div class="mb-3 col-md-2">
                                    <button type="button" class="btn btn-danger" id="working-delete-0" onclick="removeWorking('0')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <input style="display: none" type="text" class="form-control" id="working" name="working" value='{"data":[{"position":"","company":"","year":"","description":""}]}'
                                        placeholder="working" readonly>
                            </div>
                    
                            <script>
                                function updateWorkingArray(index, key, value) {
                                    // alert('index: ' + index + ', key: ' + key + ', value: ' + value)
                                    // Update the skill array dynamically
                                    var workingContainer = document.getElementById('working-container');
                                    var workingInput = document.getElementById('working');
                                    var working = JSON.parse(workingInput.value);
                    
                                    // alert(value);
                                    
                                    // alert(working['data'][index][key])
    
                                    // Update the working array
                                    working['data'][index][key] = value;
                    
                                    // Update the value in the readonly input field
                                    workingInput.value = JSON.stringify(working);
                    
                                    // You can also send the updated array to the server using AJAX if needed
                                }
    
                                function removeWorking(index) {
                                    // alert('index: ' + index)
                                    // Update the working array dynamically
                                    var workingContainer = document.getElementById('working-container');
                                    var workingInput = document.getElementById('working');
                                    var working = JSON.parse(workingInput.value);
                    
                                    // Remove the working array
                                    // working['data'].splice(index, 1);
                                    working['data'][index] = [];
                    
                                    // Update the value in the readonly input field
                                    workingInput.value = JSON.stringify(working);
    
                                    // Remove the HTML element
                                    var workingElement = document.getElementById('working-' + index);
                                    workingElement.parentNode.removeChild(workingElement);
    
                                    var workingIconElement = document.getElementById('working-company-' + index);
                                    workingIconElement.parentNode.removeChild(workingIconElement);
    
                                    var workingYearElement = document.getElementById('working-year-' + index);
                                    workingYearElement.parentNode.removeChild(workingYearElement);
    
                                    var workingDescriptionElement = document.getElementById('working-description-' + index);
                                    workingDescriptionElement.parentNode.removeChild(workingDescriptionElement);
                    
                                    var workingDeleteElement = document.getElementById('working-delete-' + index);
                                    workingDeleteElement.parentNode.removeChild(workingDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed
                                }
    
                                function addWorking(){
                                    // alert('index: ' + index)
                                    // Update the working array dynamically
                                    var workingContainer = document.getElementById('working-container');
                                    var workingInput = document.getElementById('working');
                                    var working = JSON.parse(workingInput.value);
                    
                                    // Remove the working array
                                    // working['data'].splice(index, 1);
    
                                    // {"name":"Graphic Design","icon":"icon flaticon-layers-icon"}
                                    working['data'][working['data'].length] = {"position":"","company":"","year":"","description":""};
                    
                                    // Update the value in the readonly input field
                                    workingInput.value = JSON.stringify(working);
    
                                    var position = working['data'].length - 1;
    
                                    // Add the HTML element
                                    var workingElement = document.createElement('div');
                                    workingElement.setAttribute('class', 'mb-3 col-md-5');
                                    workingElement.innerHTML = '<input type="text" class="form-control" id="working-' + position + '" name="working-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'position\', this.value)">';
    
                                    var workingCompanyElement = document.createElement('div');
                                    workingCompanyElement.setAttribute('class', 'mb-3 col-md-5');
                                    workingCompanyElement.innerHTML = '<input type="text" class="form-control" id="working-company-' + position + '" name="working-company-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'company\', this.value)">';
    
                                    var workingYearElement = document.createElement('div');
                                    workingYearElement.setAttribute('class', 'mb-3 col-md-5');
                                    workingYearElement.innerHTML = '<input type="text" class="form-control" id="working-year-' + position + '" name="working-year-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'year\', this.value)">';
    
                                    var workingDescriptionElement = document.createElement('div');
                                    workingDescriptionElement.setAttribute('class', 'mb-3 col-md-5');
                                    workingDescriptionElement.innerHTML = '<input type="text" class="form-control" id="working-description-' + position + '" name="working-description-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'description\', this.value)">';
    
                                    var workingDeleteElement = document.createElement('div');
                                    workingDeleteElement.setAttribute('class', 'mb-3 col-md-2');
                                    workingDeleteElement.innerHTML = '<button type="button" class="btn btn-danger" id="working-delete-' + position + '" onclick="removeWorking(\'' + position + '\')"><i class="fa fa-trash"></i></button>';
    
                                    workingContainer.appendChild(workingElement);
                                    workingContainer.appendChild(workingCompanyElement);
                                    workingContainer.appendChild(workingYearElement);
                                    workingContainer.appendChild(workingDescriptionElement);
                                    workingContainer.appendChild(workingDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed
                                    
                                }
                            </script>
                            
                        </div>

                    </div>
                </div>

            </div>

            <div class="text-center">
                <button class="btn btn-warning mx-auto d-flex text-white">
                    Kirim Form
                </button>
            </div>

        </form>
    </div>
@endsection
