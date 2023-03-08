$(document).ready(function () {
    $('.form-info').submit(false);

    $('.f-next').click( function( event ) {
        $('.card').addClass('flipped');
        if ($('.p-func-left').hasClass('f-show')) {
            window.location.href = "/main/step-4";
        } else {
            $('.p-func-left').addClass('f-show');
        }
    });

    $('.f-prev').click( function( event ) {
        $('.card').removeClass('flipped');
        $('.p-func-left').removeClass('f-show');
    });

    $('.f-back').click( function( event ) {
        window.location.href = "/main/step-2";
    });

    //----------TAG-------------//
    const input = document.querySelector('#tag-input');
    // Catch event and make a tag
    $('#tag-input').on('keyup', function(e) {
        e.preventDefault();
        if (e.key == 'Enter' || e.keyCode === 13) {
            let tag = e.target.value.replace(/\s+/g, ' ');
            if (tag.length > 1 && !tags.includes(tag)) {
                tag.split(',').forEach(tag => {
                    tags.push(tag);
                    createTag(tag);
                    if (tags.length >= 10) {
                        $('#tag-input').hide();
                    };
                });
            }
            e.target.value = '';
        }
    });
    // Render a tag
    function createTag(label) {
        const div = document.createElement('div');
        div.setAttribute('class', 'tag');
        div.innerHTML = '<span>' + label + '</span><svg viewBox="0 0 50 50" width="16px" height="16px" onclick="remove(this, ' + `'${label}'` + ')"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>';
        input.before(div);
    }

    //------------Experience Field-----------//
    const expDiv = $('#experience-part');

    $('#add-field-exp').click( function( event ) {
        $('.add-exp-modal').addClass('open');
    });

    $('.btn-close-modal').click( function( event ) {
        $('.box-lightbox').removeClass('open');
        returnModal();
    });

    $('#add-exp-btn').click( function( event ) {
        event.preventDefault();
        if (validateExp('add')) {
            var arr = {
                'title' :  $('#exp-title').val(),
                'company' : $('#exp-company').val(),
                'location' : $('#exp-location').val(),
                'type' : $('#exp-type').val(),
                'start_date' : $('#exp-start-date').val(),
                'end_date' : $('#exp-end-date').val(),
            };

            experience[arr.company] = arr;
            renderExpDiv(arr);
            $('.box-lightbox').removeClass('open');
            returnModal();
        }
    });

    function returnModal() {
        var all_input = document.querySelectorAll(".model-body input");
        for (exp_input of all_input) {
            exp_input.value = '';
            exp_input.classList.remove("warning");
        }
    }

    function renderExpDiv(exp = []) {
        let diff_month = monthDiff(new Date(exp.start_date), new Date(exp.end_date));
        // render
        const card = document.createElement('div');
        card.setAttribute('class', 'form-experience-card');
        card.innerHTML =
            `<div><img src="" alt="" width="48"></div>
            <div class="experience-card">
                <div class="experience-job-title"><span>` + exp.title + `</span></div>
                <span class="experience-company">` + exp.company+ ` · ` + exp.type +`</span>
                <span class="experience-info">` + exp.start_date + ` - ` + exp.end_date +  ` · ` + diff_month + ` mos</span>
                <span class="experience-info">` + exp.location + `</span>
            </div>
            <div class="button-wrapper">
                <div class="swiper-button swiper-next-button edit-card-exp" role="button" data-test="`+ exp.company +`">
                    <svg viewBox="0 0 15 15" fill="none" stroke="currentColor"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645ZM4.42166 9.28547L11.5 2.20711L12.7929 3.5L5.71455 10.5784L4.21924 11.2192L3.78081 10.7808L4.42166 9.28547Z" fill="currentColor" /> </svg>
                </div>
            </div>`;
        expDiv.append(card);
    }

    function validateExp(action) {
        console.log(action);
        var all_input = document.querySelectorAll(`#${action}-experience input`),
            check_start_date,
            check_end_date,
            check = true;
        for (exp_input of all_input) {
            if (exp_input.value.length <= 1) {
                exp_input.classList.add("warning");
                check = false;
            } else {
                exp_input.classList.remove("warning");
                if (exp_input.id == "exp-start-date") {
                    check_start_date = exp_input;
                }
                if (exp_input.id == "exp-end-date") {
                    check_end_date = exp_input;
                }
                if (check_end_date && check_start_date) {
                    let month_diff = monthDiff(new Date(check_start_date.value), new Date(check_end_date.value));
                    if (month_diff <= 0) {
                        check = false;
                        check_end_date.classList.add("warning");
                    }
                }
            }
        }
        if (!check) {
            return false;
        }
        return true;
    }

    function monthDiff(dateFrom, dateTo) {
        return dateTo.getMonth() - dateFrom.getMonth() + (12 * (dateTo.getFullYear() - dateFrom.getFullYear()))
    }

    //------------Education Field-----------//
    const eduCol = $('.col-education');
    $('#add-education').click( function( event ) {
        const eduInput = document.createElement('input');
        eduInput.setAttribute('class', 'field');
        eduInput.setAttribute('type', 'text');
        eduInput.setAttribute('name', "education[]");
        eduInput.setAttribute('placeholder', 'Oh, more?');
        eduInput.setAttribute('maxLength', 150);
        eduCol.after(eduInput);
        edu_childEle_count = $('.col-education')[0].parentElement.childElementCount;
        if (edu_childEle_count == 4) {
            $('#add-education').attr('disabled', true);
        }
    });

    //------------Certification Field-----------//
    const certDiv = $('#certification-part');

    $('#add-certification').click( function( event ) {
        $('.add-certification-modal').addClass('open');
    });

    $('#add-cert-btn').click( function( event ) {
        event.preventDefault();
        if (validateCert('add')) {
            var arr = {
                'name' :  $('#cert-name').val(),
                'organization' : $('#cert-organization').val(),
                'issue_date' : $('#cert-issue-date').val(),
                'expiration_date' : $('#cert-expiration-date').val(),
                'credential_id' : $('#cert-credential-id').val(),
                'credential_url' : $('#cert-credential-url').val(),
            };

            certificate[arr.name] = arr;
            renderCertDiv(arr);
            $('.box-lightbox').removeClass('open');
            returnModal();
        }
    });

    function renderCertDiv(cert = []) {
        let diff_month = monthDiff(new Date(cert.issue_date), new Date(cert.expiration_date));
        if (cert.credential_id != '') {
            cert.credential_id = "Credintial ID " + cert.credential_id;
        }
        // render
        const card = document.createElement('div');
        card.setAttribute('class', 'form-certification-card');
        card.innerHTML =
            `<div><img src="" alt="" width="48"></div>
            <div class="certification-card">
                <div class="certification-name"><span>` + cert.name + `</span></div>
                <span class="certification-organization">` + cert.organization + `</span>
                <span class="certification-info"> Issued ` + cert.issue_date + `</span>
                <span class="certification-info">` + cert.credential_id + `</span>
            </div>
            <div class="button-wrapper">
                <div class="swiper-button swiper-next-button edit-card-cert" role="button" data-test="`+ cert.name +`">
                    <svg viewBox="0 0 15 15" fill="none" stroke="currentColor"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645ZM4.42166 9.28547L11.5 2.20711L12.7929 3.5L5.71455 10.5784L4.21924 11.2192L3.78081 10.7808L4.42166 9.28547Z" fill="currentColor" /> </svg>
                </div>
            </div>`;
        certDiv.append(card);
    }

    function validateCert(action) {
        var all_input = document.querySelectorAll(`#${action}-certification input`),
            check_issue_date,
            check_expiration_date,
            check = true;
        for (exp_input of all_input) {
            if (exp_input.id == "cert-credential-id") {
                continue;
            }
            if (exp_input.value.length <= 1) {
                exp_input.classList.add("warning");
                check = false;
            } else {
                exp_input.classList.remove("warning");
                if (exp_input.id == "cert-issue-date") {
                    check_issue_date = exp_input;
                }
                if (exp_input.id == "cert-expiration-date") {
                    check_expiration_date = exp_input;
                }
                if (check_issue_date && check_expiration_date) {
                    let month_diff = monthDiff(new Date(check_issue_date.value), new Date(check_expiration_date.value));
                    if (month_diff <= 0) {
                        check = false;
                        check_expiration_date.classList.add("warning");
                    }
                }
            }
        }
        if (!check) {
            return false;
        }
        return true;
    }
});


