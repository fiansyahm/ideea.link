@section('main')
    <div class="mx-3 mt-5 rounded bg-dark text-white">
        <h1 class="text-center">Edit Resume</h1>
        <form enctype="multipart/form-data" class="mx-5 mb-5 pb-5" class="ps-checkout__form" action="/update-resume"
            method="post">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="id-bridge" class="form-label">ID Undangan</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                            name="id" value="{{ $resume['id'] }}" placeholder="ID Undangan" readonly>
                        @error('id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="theme" class="form-label">Tema Undangan</label>
                        <select type="text" class="form-control @error('theme') is-invalid @enderror" id="theme"
                            name="theme" value="{{ $resume->theme }}" placeholder="Tema Undangan">
                            <option @if($resume->theme == '1') selected @endif value="1">Tema 1</option>
                            <option @if($resume->theme == '2') selected @endif value="2">Tema 2</option>
                            <option @if($resume->theme == '3') selected @endif value="3">Tema 3</option>
                        </select>
  
                        @error('theme')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <h1 class="text-center">Profil</h1>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nama Lengkap<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                            name="fullname" value="{{ $resume['fullname'] }}" placeholder="Nama Lengkap">
                        @error('fullname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nama Panggilan<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('nickname') is-invalid @enderror" id="nickname"
                            name="nickname" value="{{ $resume['nickname'] }}" placeholder="Nama Panggilan">
                        @error('nickname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            name="phone" value="{{ $resume['phone'] }}" placeholder="Nomor Telepon">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ $resume['email'] }}" placeholder="Email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Lengkap<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                            name="address" value="{{ $resume['address'] }}" placeholder="Alamat Lengkap">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birth" class="form-label">Tempat, Tanggal Lahir<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('birth') is-invalid @enderror" id="birth"
                            name="birth" value="{{ $resume['birth'] }}" placeholder="Tempat, Tanggal Lahir">
                        @error('birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('website') is-invalid @enderror" id="website"
                            name="website" value="{{ $resume['website'] }}" placeholder="Website">
                        @error('website')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="freelance" class="form-label">Freelance<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('freelance') is-invalid @enderror" id="freelance"
                            name="freelance" value="{{ $resume['freelance'] }}" placeholder="Freelance">
                        @error('freelance')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto Profil<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('photo') is-invalid @enderror" id="photo"
                            name="photo" value="{{ $resume['photo'] }}" placeholder="Foto Profil">
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label">Negara Asal<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('nationality') is-invalid @enderror" id="nationality"
                            name="nationality" value="{{ $resume['nationality'] }}" placeholder="Negara Asal">
                        @error('nationality')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fax" class="form-label">Fax<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('fax') is-invalid @enderror" id="fax"
                            name="fax" value="{{ $resume['fax'] }}" placeholder="Fax">
                        @error('fax')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="job" class="form-label">Pekerjaan<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('job') is-invalid @enderror" id="job"
                            name="job" value="{{ $resume['job'] }}" placeholder="Pekerjaan">
                        @error('job')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="aboutme" class="form-label">About Me<a style="color:orange;">(Wajib)</a></label>
                        <input type="text" class="form-control @error('aboutme') is-invalid @enderror" id="aboutme"
                            name="aboutme" value="{{ $resume['aboutme'] }}" placeholder="About Me">
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
                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin"
                            name="linkedin" value="{{ $resume['linkedin'] }}" placeholder="Linkedin">
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram"
                            name="instagram" value="{{ $resume['instagram'] }}" placeholder="Instagram">
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook"
                            name="facebook" value="{{ $resume['facebook'] }}" placeholder="Facebook">
                    </div>
                    <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter"
                            name="twitter" value="{{ $resume['twitter'] }}" placeholder="Twitter">
                    </div>
                    <div class="mb-3">
                        <label for="github" class="form-label">Github</label>
                        <input type="text" class="form-control @error('github') is-invalid @enderror" id="github"
                            name="github" value="{{ $resume['github'] }}" placeholder="Github">
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                    // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                    $canido = json_decode($resume->canido, true);
                    $counter=0;
                ?>
                <h1 class="text-center my-5">Skill & Experience</h1>     
                
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                        $canido = json_decode($resume->canido, true);
                        $counter = 0;
                        ?>
                        <div class="col-md-6">
                            @if(isset($canido['data']))
                                <label for="canido" class="form-label">CAN I DO</label>
                                {{-- add button add canido --}}
                                <div class="btn btn-success my-2" onclick="addCanido()">Add Can I Do</div>
                                <div class="row" id="canido-container">
                                    @foreach ($canido['data'] as $item)
                                        @if($item!=null)
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="canido-{{ $counter }}"
                                                    {{-- name="canido-{{ $counter }}"  --}}
                                                    value="{{ $item['name'] }}" placeholder="{{ $item['name'] }}"
                                                    oninput="updateCanidoArray('{{ $counter }}', 'name', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="canido-icon-{{ $counter }}"
                                                    {{-- name="canido-icon-{{ $counter }}"  --}}
                                                    value="{{ $item['icon'] }}" placeholder="{{ $item['icon'] }}"
                                                    oninput="updateCanidoArray('{{ $counter }}', 'icon', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <button type="button" class="btn btn-danger" id="canido-delete-{{ $counter }}" onclick="removeCanido('{{ $counter }}')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        @endif
                                    <?php $counter++; ?>
                                    @endforeach
                                </div>
                                <div class="mb-3 col-md-12">
                                    <input style="display: none" type="text" class="form-control" id="canido" name="canido" value="{{ json_encode($canido) }}"
                                           placeholder="Can I Do" readonly>
                                </div>
                            @endif
                    
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
                                    canidoElement.innerHTML = '<input type="text" class="form-control" id="canido-' + position + '" value="" placeholder="Can I Do" oninput="updateCanidoArray(\'' + position + '\', \'name\', this.value)">';

                                    var canidoIconElement = document.createElement('div');
                                    canidoIconElement.setAttribute('class', 'mb-3 col-md-5');
                                    canidoIconElement.innerHTML = '<input type="text" class="form-control" id="canido-icon-' + position + '" value="" placeholder="Can I Do" oninput="updateCanidoArray(\'' + position + '\', \'icon\', this.value)">';

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


                        <?php
                        // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                        $skill= json_decode($resume->skill, true);
                        $counter = 0;
                        ?>
                        <div class="col-md-6">
                            @if(isset($skill['data']))
                            <label for="canido" class="form-label">Skill</label>
                            {{-- add button add canido --}}
                            <div class="btn btn-success my-2" onclick="addSkill()">Add Skill</div>
                                <div class="row" id="skill-container">
                                    @foreach ($skill['data'] as $item)
                                        @if($item!=null)
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="skill-{{ $counter }}"
                                                    {{-- name="skill-{{ $counter }}"  --}}
                                                    value="{{ $item['name'] }}" placeholder="{{ $item['name'] }}"
                                                    oninput="updateSkillArray('{{ $counter }}', 'name', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="skill-percentage-{{ $counter }}"
                                                    {{-- name="skill-percentage-{{ $counter }}"  --}}
                                                    value="{{ $item['percentage'] }}" placeholder="{{ $item['percentage'] }}"
                                                    oninput="updateSkillArray('{{ $counter }}', 'percentage', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <button type="button" class="btn btn-danger" id="skill-delete-{{ $counter }}" onclick="removeSkill('{{ $counter }}')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        @endif
                                        <?php $counter++; ?>
                                    @endforeach
                                </div>
                                <div class="mb-3 col-md-12">
                                    <input style="display: none" type="text" class="form-control" id="skill" name="skill" value="{{ json_encode($skill) }}"
                                           placeholder="Skill" readonly>
                                </div>
                            @endif
                    
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
                                    skillElement.innerHTML = '<input type="text" class="form-control" id="skill-' + position + '" value="" placeholder="Skill" oninput="updateSkillArray(\'' + position + '\', \'name\', this.value)">';

                                    var skillPercentageElement = document.createElement('div');
                                    skillPercentageElement.setAttribute('class', 'mb-3 col-md-5');
                                    skillPercentageElement.innerHTML = '<input type="text" class="form-control" id="skill-percentage-' + position + '" value="" placeholder="Skill" oninput="updateSkillArray(\'' + position + '\', \'percentage\', this.value)">';

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

                <div class="col-md-12">
                    <div class="row">
                        <?php
                        // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                        $educational = json_decode($resume->educational, true);
                        $counter = 0;
                        ?>
                        <div class="col-md-6">
                            @if(isset($educational['data']))
                                <label for="educational" class="form-label">Educational</label>
                                {{-- add button add educational --}}
                                <div class="btn btn-success my-2" onclick="addEducational()">Add Educational</div>
                                <div class="row" id="educational-container">
                                    @foreach ($educational['data'] as $item)
                                        @if($item!=null)
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="educational-{{ $counter }}"
                                                    {{-- name="educational-{{ $counter }}"  --}}
                                                    value="{{ $item['degree'] }}" placeholder="{{ $item['degree'] }}"
                                                    oninput="updateEducationalArray('{{ $counter }}', 'degree', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="educational-university-{{ $counter }}"
                                                    {{-- name="educational-university-{{ $counter }}"  --}}
                                                    value="{{ $item['university'] }}" placeholder="{{ $item['university'] }}"
                                                    oninput="updateEducationalArray('{{ $counter }}', 'university', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="educational-year-{{ $counter }}"
                                                    {{-- name="educational-year-{{ $counter }}"  --}}
                                                    value="{{ $item['year'] }}" placeholder="{{ $item['year'] }}"
                                                    oninput="updateEducationalArray('{{ $counter }}', 'year', this.value)">
                                            </div>
                                            <div class="mb-5 col-md-5">
                                                <input type="text" class="form-control" id="educational-description-{{ $counter }}"
                                                    {{-- name="educational-description-{{ $counter }}"  --}}
                                                    value="{{ $item['description'] }}" placeholder="{{ $item['description'] }}"
                                                    oninput="updateEducationalArray('{{ $counter }}', 'description', this.value)">
                                            </div>
                                            <div class="mb-5 col-md-2">
                                                <button type="button" class="btn btn-danger" id="educational-delete-{{ $counter }}" onclick="removeEducational('{{ $counter }}')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        @endif
                                        <?php $counter++; ?>
                                    
                                    @endforeach
                                </div>
                                <div class="mb-3 col-md-12">
                                    <input style="display: none" type="text" class="form-control" id="educational" name="educational" value="{{ json_encode($educational) }}"
                                           placeholder="Can I Do" readonly>
                                </div>
                            @endif
                    
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
                                    educationalElement.innerHTML = '<input type="text" class="form-control" id="educational-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'degree\', this.value)">';

                                    var educationalUniversityElement = document.createElement('div');
                                    educationalUniversityElement.setAttribute('class', 'mb-3 col-md-5');
                                    educationalUniversityElement.innerHTML = '<input type="text" class="form-control" id="educational-university-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'university\', this.value)">';

                                    var educationalYearElement = document.createElement('div');
                                    educationalYearElement.setAttribute('class', 'mb-3 col-md-5');
                                    educationalYearElement.innerHTML = '<input type="text" class="form-control" id="educational-year-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'year\', this.value)">';

                                    var educationalDescriptionElement = document.createElement('div');
                                    educationalDescriptionElement.setAttribute('class', 'mb-3 col-md-5');
                                    educationalDescriptionElement.innerHTML = '<input type="text" class="form-control" id="educational-description-' + position + '" value="" placeholder="Educational Data" oninput="updateEducationalArray(\'' + position + '\', \'description\', this.value)">';

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


                        <?php
                        // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                        $working= json_decode($resume->working, true);
                        $counter = 0;
                        ?>
                        <div class="col-md-6">
                            @if(isset($working['data']))
                            <label for="canido" class="form-label">working</label>
                            {{-- add button add canido --}}
                            <div class="btn btn-success my-2" onclick="addWorking()">Add working</div>
                                <div class="row" id="working-container">
                                    @foreach ($working['data'] as $item)
                                    @if($item!=null)
                                        <div class="mb-3 col-md-5">
                                            <input type="text" class="form-control" id="working-{{ $counter }}"
                                                   {{-- name="working-{{ $counter }}"  --}}
                                                   value="{{ $item['position'] }}" placeholder="{{ $item['position'] }}"
                                                   oninput="updateWorkingArray('{{ $counter }}', 'position', this.value)">
                                        </div>
                                        <div class="mb-3 col-md-5">
                                            <input type="text" class="form-control" id="working-company-{{ $counter }}"
                                                   {{-- name="working-company-{{ $counter }}"  --}}
                                                   value="{{ $item['company'] }}" placeholder="{{ $item['company'] }}"
                                                   oninput="updateWorkingArray('{{ $counter }}', 'company', this.value)">
                                        </div>
                                        <div class="mb-3 col-md-5">
                                            <input type="text" class="form-control" id="working-year-{{ $counter }}"
                                                   {{-- name="working-year-{{ $counter }}"  --}}
                                                   value="{{ $item['year'] }}" placeholder="{{ $item['year'] }}"
                                                   oninput="updateWorkingArray('{{ $counter }}', 'year', this.value)">
                                        </div>
                                        <div class="mb-5 col-md-5">
                                            <input type="text" class="form-control" id="working-description-{{ $counter }}"
                                                   {{-- name="working-description-{{ $counter }}"  --}}
                                                   value="{{ $item['description'] }}" placeholder="{{ $item['description'] }}"
                                                   oninput="updateWorkingArray('{{ $counter }}', 'description', this.value)">
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <button type="button" class="btn btn-danger" id="working-delete-{{ $counter }}" onclick="removeWorking('{{ $counter }}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    @endif
                                        <?php $counter++; ?>
                                    @endforeach
                                </div>
                                <div class="mb-3 col-md-12">
                                    <input style="display: none" type="text" class="form-control" id="working" name="working" value="{{ json_encode($working) }}"
                                           placeholder="working" readonly>
                                </div>
                            @endif
                    
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
                                    workingElement.innerHTML = '<input type="text" class="form-control" id="working-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'position\', this.value)">';

                                    var workingCompanyElement = document.createElement('div');
                                    workingCompanyElement.setAttribute('class', 'mb-3 col-md-5');
                                    workingCompanyElement.innerHTML = '<input type="text" class="form-control" id="working-company-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'company\', this.value)">';

                                    var workingYearElement = document.createElement('div');
                                    workingYearElement.setAttribute('class', 'mb-3 col-md-5');
                                    workingYearElement.innerHTML = '<input type="text" class="form-control" id="working-year-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'year\', this.value)">';

                                    var workingDescriptionElement = document.createElement('div');
                                    workingDescriptionElement.setAttribute('class', 'mb-3 col-md-5');
                                    workingDescriptionElement.innerHTML = '<input type="text" class="form-control" id="working-description-' + position + '" value="" placeholder="working Data" oninput="updateWorkingArray(\'' + position + '\', \'description\', this.value)">';

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

                <div class="col-md-12">
                    <div class="row">
                        <?php
                        // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                        $project = json_decode($resume->project, true);
                        $counter = 0;
                        ?>
                        <div class="col-md-6">
                            @if(isset($project['data']))
                                <label for="project" class="form-label">project</label>
                                {{-- add button add project --}}
                                <div class="btn btn-success my-2" onclick="addproject()">Add project</div>
                                <div class="row" id="project-container">
                                    @foreach ($project['data'] as $item)
                                        @if($item!=null)
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="project-{{ $counter }}"
                                                    {{-- name="project-{{ $counter }}"  --}}
                                                    value="{{ $item['name'] }}" placeholder="{{ $item['name'] }}"
                                                    oninput="updateprojectArray('{{ $counter }}', 'name', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="project-link-{{ $counter }}"
                                                    {{-- name="project-link-{{ $counter }}"  --}}
                                                    value="{{ $item['link'] }}" placeholder="{{ $item['link'] }}"
                                                    oninput="updateprojectArray('{{ $counter }}', 'link', this.value)">
                                            </div>
                                            <div class="mb-3 col-md-5">
                                                <input type="text" class="form-control" id="project-thumbnail-{{ $counter }}"
                                                    {{-- name="project-thumbnail-{{ $counter }}"  --}}
                                                    value="{{ $item['thumbnail'] }}" placeholder="{{ $item['thumbnail'] }}"
                                                    oninput="updateprojectArray('{{ $counter }}', 'thumbnail', this.value)">
                                            </div>
                                            <div class="mb-5 col-md-5">
                                                <input type="text" class="form-control" id="project-description-{{ $counter }}"
                                                    {{-- name="project-description-{{ $counter }}"  --}}
                                                    value="{{ $item['description'] }}" placeholder="{{ $item['description'] }}"
                                                    oninput="updateprojectArray('{{ $counter }}', 'description', this.value)">
                                            </div>
                                            <div class="mb-5 col-md-2">
                                                <button type="button" class="btn btn-danger" id="project-delete-{{ $counter }}" onclick="removeproject('{{ $counter }}')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        @endif
                                        <?php $counter++; ?>
                                    
                                    @endforeach
                                </div>
                                <div class="mb-3 col-md-12">
                                    <input style="display: none" type="text" class="form-control" id="project" name="project" value="{{ json_encode($project) }}"
                                           placeholder="Can I Do" readonly>
                                </div>
                            @endif
                    
                            <script>
                                function updateprojectArray(index, key, value) {
                                    // alert('index: ' + index + ', key: ' + key + ', value: ' + value)
                                    // Update the project array dynamically
                                    var projectContainer = document.getElementById('project-container');
                                    var projectInput = document.getElementById('project');
                                    var project = JSON.parse(projectInput.value);
                    
                                    // alert(value);
                                    
                                    // alert(project['data'][index][key])

                                    // Update the project array
                                    project['data'][index][key] = value;
                    
                                    // Update the value in the readonly input field
                                    projectInput.value = JSON.stringify(project);
                    
                                    // You can also send the updated array to the server using AJAX if needed
                                }

                                function removeproject(index) {
                                    // alert('index: ' + index)
                                    // Update the canido array dynamically
                                    var projectContainer = document.getElementById('project-container');
                                    var projectInput = document.getElementById('project');
                                    var project = JSON.parse(projectInput.value);
                    
                                    // Remove the project array
                                    // project['data'].splice(index, 1);
                                    project['data'][index] = [];
                    
                                    // Update the value in the readonly input field
                                    projectInput.value = JSON.stringify(project);

                                    // Remove the HTML element
                                    var projectElement = document.getElementById('project-' + index);
                                    projectElement.parentNode.removeChild(projectElement);

                                    var projectIconElement = document.getElementById('project-link-' + index);
                                    projectIconElement.parentNode.removeChild(projectIconElement);

                                    var projectThumbnailElement = document.getElementById('project-thumbnail-' + index);
                                    projectThumbnailElement.parentNode.removeChild(projectThumbnailElement);

                                    var projectDescriptionElement = document.getElementById('project-description-' + index);
                                    projectDescriptionElement.parentNode.removeChild(projectDescriptionElement);

                                    var projectDeleteElement = document.getElementById('project-delete-' + index);
                                    projectDeleteElement.parentNode.removeChild(projectDeleteElement);

                                    // You can also send the updated array to the server using AJAX if needed
                                }

                                function addproject(){
                                    // alert('index: ' + index)
                                    // Update the project array dynamically
                                    var projectContainer = document.getElementById('project-container');
                                    var projectInput = document.getElementById('project');
                                    var project = JSON.parse(projectInput.value);
                    
                                    // Remove the project array
                                    // project['data'].splice(index, 1);

                                    // {"name":"Graphic Design","icon":"icon flaticon-layers-icon"}
                                    project['data'][project['data'].length] = {"name":"","link":"","thumbnail":"","description":""};
                    
                                    // Update the value in the readonly input field
                                    projectInput.value = JSON.stringify(project);

                                    var position = project['data'].length - 1;

                                    // Add the HTML element
                                    var projectElement = document.createElement('div');
                                    projectElement.setAttribute('class', 'mb-3 col-md-5');
                                    projectElement.innerHTML = '<input type="text" class="form-control" id="project-' + position + '" value="" placeholder="project Data" oninput="updateprojectArray(\'' + position + '\', \'name\', this.value)">';

                                    var projectLinkElement = document.createElement('div');
                                    projectLinkElement.setAttribute('class', 'mb-3 col-md-5');
                                    projectLinkElement.innerHTML = '<input type="text" class="form-control" id="project-link-' + position + '" value="" placeholder="project Data" oninput="updateprojectArray(\'' + position + '\', \'link\', this.value)">';

                                    var projectThumbnailElement = document.createElement('div');
                                    projectThumbnailElement.setAttribute('class', 'mb-3 col-md-5');
                                    projectThumbnailElement.innerHTML = '<input type="text" class="form-control" id="project-thumbnail-' + position + '" value="" placeholder="project Data" oninput="updateprojectArray(\'' + position + '\', \'thumbnail\', this.value)">';

                                    var projectDescriptionElement = document.createElement('div');
                                    projectDescriptionElement.setAttribute('class', 'mb-3 col-md-5');
                                    projectDescriptionElement.innerHTML = '<input type="text" class="form-control" id="project-description-' + position + '" value="" placeholder="project Data" oninput="updateprojectArray(\'' + position + '\', \'description\', this.value)">';

                                    var projectDeleteElement = document.createElement('div');
                                    projectDeleteElement.setAttribute('class', 'mb-3 col-md-2');
                                    projectDeleteElement.innerHTML = '<button type="button" class="btn btn-danger" id="project-delete-' + position + '" onclick="removeproject(\'' + position + '\')"><i class="fa fa-trash"></i></button>';

                                    projectContainer.appendChild(projectElement);
                                    projectContainer.appendChild(projectLinkElement);
                                    projectContainer.appendChild(projectThumbnailElement);
                                    projectContainer.appendChild(projectDescriptionElement);
                                    projectContainer.appendChild(projectDeleteElement);
                                    // You can also send the updated array to the server using AJAX if needed

                                    
                                }
                            </script>
                    
                        </div>

                        {{-- soon --}}
                       
                    </div>
                </div>

            </div>  


            <div class="text-center">
                <button class="btn btn-warning mx-auto d-flex text-white">
                    Update Resume
                </button>
            </div>

        </form>
    </div>
@endsection
