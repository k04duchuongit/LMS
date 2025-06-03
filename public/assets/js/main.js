$(document).ready(function () {
    // Sidebar functionality
    function initSidebar() {
        // Mobile toggle
        $('.mobile-toggle').on('click', function () {
            $('.sidebar').toggleClass('active');
            $('.main-content').toggleClass('active');
        });

        // Dropdown toggle
        $('.sidebar-dropdown-toggle').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            const $this = $(this);
            const $dropdownMenu = $this.next('.sidebar-dropdown-menu');
            const $icon = $this.find('.fa-chevron-down');
            
            // Close other dropdowns
            $('.sidebar-dropdown-menu').not($dropdownMenu).slideUp(180);
            $('.sidebar-dropdown-toggle').not($this).removeClass('active');
            $('.sidebar-dropdown-toggle').not($this).find('.fa-chevron-down').css('transform', 'rotate(0deg)');
            
            // Toggle current dropdown
            $dropdownMenu.slideToggle(180);
            $this.toggleClass('active');
            $icon.css('transform', $this.hasClass('active') ? 'rotate(180deg)' : 'rotate(0deg)');
        });

        // Close dropdowns when clicking outside
        $(document).on('click', function (e) {
            if (!$(e.target).closest('.sidebar-dropdown').length) {
                $('.sidebar-dropdown-menu').slideUp(180);
                $('.sidebar-dropdown-toggle').removeClass('active');
                $('.sidebar-dropdown-toggle .fa-chevron-down').css('transform', 'rotate(0deg)');
            }
        });

        // Responsive handling
        function handleResize() {
            if (window.innerWidth <= 992) {
                $('.sidebar').addClass('active');
                $('.main-content').addClass('active');
            } else {
                $('.sidebar').removeClass('active');
                $('.main-content').removeClass('active');
            }
        }
        handleResize();
        $(window).on('resize', handleResize);
    }

    // Initialize sidebar
    initSidebar();

    // --- Student Manager (student-manager.html) ---
    // Initialize student details modal
    if ($('#studentDetailsModal').length) {
        new bootstrap.Modal(document.getElementById('studentDetailsModal'));
    }

    // --- Quiz Essay (quiz-essay.html) ---
    // Add question
    if ($('#questionsList').length) {
        window.addQuestion = function() {
            const questionsList = document.getElementById('questionsList');
            const questionCount = questionsList.children.length + 1;
            const newQuestion = document.createElement('div');
            newQuestion.className = 'question-item card border mb-3';
            newQuestion.innerHTML = `
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mb-0">Câu hỏi ${questionCount}</h6>
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeQuestion(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Nội dung câu hỏi <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Điểm tối đa <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" min="0" max="100" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Số từ tối thiểu</label>
                            <input type="number" class="form-control" min="0" placeholder="Để trống nếu không yêu cầu">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Gợi ý trả lời</label>
                            <textarea class="form-control" rows="2" placeholder="Nhập gợi ý cho học viên (không bắt buộc)"></textarea>
                        </div>
                    </div>
                </div>
            `;
            questionsList.appendChild(newQuestion);
        };

        // Remove question
        window.removeQuestion = function(button) {
            const questionItem = button.closest('.question-item');
            questionItem.remove();
            // Update question numbers
            const questions = document.querySelectorAll('.question-item');
            questions.forEach((question, index) => {
                question.querySelector('h6').textContent = `Câu hỏi ${index + 1}`;
            });
        };

        // Add rubric
        window.addRubric = function() {
            const rubricList = document.getElementById('rubricList');
            const newRubric = document.createElement('div');
            newRubric.className = 'rubric-item mb-3';
            newRubric.innerHTML = `
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Tiêu chí">
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" placeholder="Điểm tối đa">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Mô tả">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-outline-danger" type="button" onclick="removeRubric(this)">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            `;
            rubricList.appendChild(newRubric);
        };

        // Remove rubric
        window.removeRubric = function(button) {
            button.closest('.rubric-item').remove();
        };

        // Rubric settings toggle
        $('#enableRubric').on('change', function() {
            $('.rubric-settings').toggle(this.checked);
        });
    }

    // --- Class Create (class-create.html) ---
    if ($('#createClassForm').length) {
        $('#createClassForm').on('submit', function(e) {
            e.preventDefault();
            // TODO: Xử lý logic tạo lớp học
            alert('Tạo lớp học thành công!');
            window.location.href = 'my-classes.html';
        });
    }

    // --- Class Manager (class-manager.html) ---
    // Initialize any modals or dropdowns specific to class manager
    if ($('.class-card').length) {
        // Add any class manager specific functionality here
    }

    // --- Class Detail (class-detail.html) ---
    // Initialize any modals or dropdowns specific to class detail
    if ($('.student-list').length) {
        // Add any class detail specific functionality here
    }

    // Quiz Modals: Add/Remove options (for createquiz.html)
    // Single Choice
    $('#singleChoiceModal').on('click', '.btn-outline-primary', function () {
        const optionCount = $('#singleChoiceOptions .answer-option').length;
        const nextLetter = String.fromCharCode(65 + optionCount); // A, B, C, ...
        const newOption = `
            <div class="answer-option mb-2">
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="singleChoiceCorrect">
                    </div>
                    <input type="text" class="form-control" placeholder="Đáp án ${nextLetter}">
                    <button class="btn btn-outline-danger" type="button">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        $('#singleChoiceOptions').append(newOption);
    });
    // Multiple Choice
    $('#multipleChoiceModal').on('click', '.btn-outline-primary', function () {
        const optionCount = $('#multipleChoiceOptions .answer-option').length;
        const nextLetter = String.fromCharCode(65 + optionCount); // A, B, C, ...
        const newOption = `
            <div class="answer-option mb-2">
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox">
                    </div>
                    <input type="text" class="form-control" placeholder="Đáp án ${nextLetter}">
                    <button class="btn btn-outline-danger" type="button">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        $('#multipleChoiceOptions').append(newOption);
    });
    // Short Answer
    $('#shortAnswerModal').on('click', '.btn-outline-primary', function () {
        const optionCount = $('#shortAnswerOptions > div').length;
        const newOption = `
            <div class="mb-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Đáp án ${optionCount + 1}">
                    <button class="btn btn-outline-danger" type="button">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        $('#shortAnswerOptions').append(newOption);
    });
    // Remove option (for all modals)
    $('.modal').on('click', '.btn-outline-danger', function () {
        $(this).closest('.answer-option, .mb-2').remove();
    });

    // Quiz option selection (for performquiz.html and similar)
    $(document).on('click', '.option-item', function () {
        var $container = $(this).closest('.options-container');
        if ($container.length) {
            $container.find('.option-item').removeClass('selected');
        }
        $(this).addClass('selected');
    });

    // Star rating interaction (for Evaluate.html and similar)
    $(document).on('mouseenter', '.star-rating .fa-star', function () {
        var $stars = $(this).parent().find('.fa-star');
        var idx = $stars.index(this);
        $stars.each(function (i) {
            $(this).toggleClass('selected', i <= idx);
        });
    });
    $(document).on('mouseleave', '.star-rating', function () {
        $(this).find('.fa-star').removeClass('selected');
    });
    $(document).on('click', '.star-rating .fa-star', function () {
        var $stars = $(this).parent().find('.fa-star');
        var idx = $stars.index(this);
        $stars.each(function (i) {
            $(this).toggleClass('fa-solid', i <= idx);
            $(this).toggleClass('fa-regular', i > idx);
        });
    });

    // --- Notifications Email (superadmin/notifications-email.html) ---
    // Form validation
    $(document).on('submit', '#emailForm', function(e) {
        e.preventDefault();
        let isValid = true;
        $(this).find('[required]').each(function() {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        if (!isValid) {
            alert('Vui lòng điền đầy đủ thông tin bắt buộc!');
            return;
        }
        alert('Gửi email thành công!');
        window.location.href = 'notifications-history.html';
    });
    // Show/hide custom recipients
    $(document).on('change', 'select[name="recipients"]', function() {
        if ($(this).val() === 'custom') {
            $('#customRecipients').show();
        } else {
            $('#customRecipients').hide();
        }
    });
    // Template selection
    $(document).on('click', '.list-group-item', function(e) {
        e.preventDefault();
        const title = $(this).find('h6').text();
        const content = $(this).find('p').text();
        $('input[name="subject"]').val(title);
        $('textarea[name="content"]').val(content);
    });
    // File upload handling (dropzone)
    $(document).on('dragover', '#dropzone', function(e) {
        e.preventDefault();
        $(this).addClass('dragover');
    });
    $(document).on('dragleave', '#dropzone', function() {
        $(this).removeClass('dragover');
    });
    $(document).on('drop', '#dropzone', function(e) {
        e.preventDefault();
        $(this).removeClass('dragover');
        handleFiles(e.originalEvent.dataTransfer.files);
    });
    $(document).on('click', '#dropzone', function() {
        const input = $('<input type="file" multiple style="display:none">');
        input.on('change', function(e) {
            handleFiles(e.target.files);
        });
        $('body').append(input);
        input.trigger('click');
        setTimeout(() => input.remove(), 1000);
    });
    function handleFiles(files) {
        const fileList = $('#fileList');
        Array.from(files).forEach(file => {
            const fileItem = $(`
                <div class="file-item d-flex align-items-center p-2 border rounded mb-2">
                    <i class="fas fa-file me-2"></i>
                    <span class="flex-grow-1">${file.name}</span>
                    <button type="button" class="btn btn-sm btn-light remove-file"><i class="fas fa-times"></i></button>
                </div>
            `);
            fileItem.find('.remove-file').on('click', function() {
                fileItem.remove();
            });
            fileList.append(fileItem);
        });
    }

  

    // --- sendMail.html: Summernote, recipientType, scheduleEmail, template-card ---
    // Initialize rich text editor (sendMail.html)
    if ($('#emailContent').length) {
        $('#emailContent').summernote({
            placeholder: 'Soạn nội dung email...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    }
    // Recipient type change (sendMail.html)
    $('#recipientType').on('change', function() {
        const value = $(this).val();
        $('#classSelect, #studentsSelect, #customEmails').hide();
        if (value === 'class') {
            $('#classSelect').show();
        } else if (value === 'students') {
            $('#studentsSelect').show();
        } else if (value === 'custom') {
            $('#customEmails').show();
        }
    });
    // Schedule email toggle (sendMail.html)
    $('#scheduleEmail').on('change', function() {
        if ($(this).is(':checked')) {
            $('#scheduleOptions').show();
        } else {
            $('#scheduleOptions').hide();
        }
    });
    // Template card selection (sendMail.html)
    $('.template-card').on('click', function() {
        $('.template-card').removeClass('selected');
        $(this).addClass('selected');
        // In a real application, this would load the template content
        const templateTitle = $(this).find('.card-title').text();
        alert('Đã chọn mẫu: ' + templateTitle);
    });
}); 