
(function () {
    function draftQuery(selector) {
        if (!(this instanceof draftQuery))
            return new draftQuery(selector)
        if (selector === typeof '') {
            this.elements = document.querySelectorAll(selector) // it 's array element
        }
        else if (selector.nodeName) {
            this.elements = selector

        }
        return this
    }
    draftQuery.fn = draftQuery.prototype

    draftQuery.prototype.each = function (...args) {
        this.elements.forEach(...args)
        return this
    }
    draftQuery.prototype.addClass = function (className) {
        this.each(element => {
            className.split(' ').forEach(oneClass => {
                element.classList.add(oneClass)
            })
        })
        return this
    }

    draftQuery.prototype.addToolbar = function () {
        let CSS = ``;
        // if (window.getSelection() && window.getSelection().hasOwnProperty('getRangeAt')) {
        //     const { top, left } = getSelection().getRangeAt(0).getBoundingClientRect()
        //     CSS = `top : ${top}; left : ${left}; position :absolute; `

        // }

        if (this.CSS) {
            CSS += this.CSS;
        }

        //   console.log(this.elements)
        let parent = document.createElement('div');
        parent.innerHTML = `<div id ="toolbar-editor"  style="${CSS}">
        <button data-command='h1' class='css-1pulk9m'>
            <svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.00023 5L4 17M13 5L12.9998 17M4 11H12.9998M19.875 19V10L17.625 12.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <button data-command='h2' class='css-1pulk9m'>
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="css-9v3hhm" viewBox="0 0 24 24"><path d="M3.37402 5V17M12.374 5V17M3.37402 11H12.374M16.302 11.373C16.5035 10.8941 16.8644 10.4997 17.3236 10.2566C17.7829 10.0136 18.312 9.93705 18.8213 10.0399C19.3306 10.1427 19.7886 10.4186 20.1175 10.8207C20.4465 11.2229 20.6262 11.7265 20.626 12.246C20.628 12.694 20.494 13.132 20.242 13.503L16.123 19H20.626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <button data-command='h3' class='css-1pulk9m'>
            <svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.375 5V17M12.375 5V17M3.375 11H12.375M16.125 10H20.625L18 13.75C18.4317 13.7499 18.8568 13.8564 19.2375 14.0598C19.6183 14.2633 19.943 14.5575 20.1828 14.9165C20.4227 15.2754 20.5703 15.688 20.6127 16.1176C20.655 16.5472 20.5907 16.9807 20.4255 17.3795C20.2603 17.7783 19.9993 18.1303 19.6656 18.4042C19.3319 18.678 18.9358 18.8654 18.5123 18.9496C18.0889 19.0338 17.6513 19.0123 17.2382 18.8869C16.8251 18.7616 16.4492 18.5363 16.144 18.231" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <div data-orientation="vertical" aria-orientation="vertical" role="separator" class="css-picdfb"></div>
        <button data-command='bold' class='css-1pulk9m'>
            <svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8571 12C13.918 12 14.9354 11.5786 15.6856 10.8284C16.4357 10.0783 16.8571 9.06087 16.8571 8C16.8571 6.93913 16.4357 5.92172 15.6856 5.17157C14.9354 4.42143 13.918 4 12.8571 4H6V12M12.8571 12H6M12.8571 12H14C15.0609 12 16.0783 12.4214 16.8284 13.1716C17.5786 13.9217 18 14.9391 18 16C18 17.0609 17.5786 18.0783 16.8284 18.8284C16.0783 19.5786 15.0609 20 14 20H6V12" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <button data-command='italic' class='css-1pulk9m'>
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="css-9v3hhm" viewBox="0 0 24 24"><path d="M10.8571 4H17.7142M6.28564 20H13.1428M14.2856 4L9.71422 20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <button data-command='strike' class='css-1pulk9m'>
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="css-119rivw" viewBox="0 0 24 24"><path d="M11.0121 12H12.9874C15.1693 12 16.938 13.7909 16.938 16C16.938 18.2091 15.1693 20 12.9874 20H11.0121C8.83024 20 7.06149 18.2091 7.06149 16M16.938 8C16.938 5.79086 15.1693 4 12.9874 4H11.0121C8.83024 4 7.06149 5.79086 7.06149 8C7.06149 8.3453 7.1047 8.68038 7.18595 9M4 12H20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <button data-command='inline-code' class='css-1pulk9m'>
            <svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 16.5L21 12L16.5 7.50002M7.5 7.50002L3 12L7.5 16.5M13.8 3.90002L10.2 20.1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        <button data-command='link' class='css-1pulk9m'>
            <svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.1898 12.9051C10.5785 13.4247 11.0744 13.8547 11.6439 14.1659C12.2134 14.477 12.8431 14.662 13.4904 14.7084C14.1377 14.7547 14.7874 14.6613 15.3954 14.4345C16.0034 14.2077 16.5555 13.8528 17.0143 13.3938L19.7296 10.6785C20.554 9.825 21.0101 8.68183 20.9998 7.49525C20.9895 6.30867 20.5136 5.17361 19.6745 4.33453C18.8354 3.49546 17.7004 3.01952 16.5138 3.0092C15.3272 2.99889 14.184 3.45504 13.3305 4.27941L11.7737 5.82714M13.8102 11.0949C13.4215 10.5752 12.9256 10.1452 12.3561 9.83411C11.7866 9.52297 11.1569 9.33795 10.5096 9.2916C9.86232 9.24524 9.21264 9.33863 8.60462 9.56544C7.99661 9.79224 7.44449 10.1472 6.9857 10.6061L4.27037 13.3214C3.44601 14.175 2.98986 15.3181 3.00017 16.5047C3.01048 17.6913 3.48643 18.8264 4.3255 19.6654C5.16457 20.5045 6.29964 20.9804 7.48622 20.9908C8.6728 21.0011 9.81596 20.5449 10.6695 19.7206L12.2172 18.1728" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
        </div>`;

        this.elements.parentNode.appendChild(parent);
        this.parentDOM = parent;

        this.elements.addEventListener('mouseout' , (e) => {
            // console.log('mouseout')
        })
        this.elements.addEventListener('mouseup' , (e) => {
            console.log('mouseup');
            this.selection(e);
        })
        this.elements.addEventListener('click' ,  e => {
            console.log('click')
        })
        this.elements.addEventListener('keypress' , e => {
            switch(e.keyCode){
                case 13 :
                    this.turnOffToolbar();
                    // document.createTextNode('sabcjahsbc');
                    // e.stopPropagation();
                    // e.preventDefault();
                    // if(getSelection()  && getSelection().rangeCount){
                    //     const dom = document.createElement('span')
                    //     dom.innerHTML = "innertext ?"
                    //     const selection = getSelection() , range = getSelection().getRangeAt(0)
                    //     const br = document.createElement('br')
                    //     range.insertNode(br)
                    //     range.setStartAfter(br)
                    //     range.collapse(true)

                    //     range.removeAllRanges()
                    //     selection.addRange(range)
                    //     range.collapse(true)
                    //     break;

                    // }
            }
        })
        return this
    };
    draftQuery.prototype.mouseoutEvent = ()  => {
        const dom = document.getElementById('toolbar-editor')
        // dom.style.display = 'none'

    }

    draftQuery.prototype.turnOffToolbar = function () {
        const dom = document.getElementById('toolbar-editor')
        CSS = `display : none; `
        dom.style = dom.style.cssText + CSS
    }

    draftQuery.prototype.insertAt = function (innerHTML, search, replace, start, end) {
        return innerHTML.slice(0, start)
    	+ innerHTML.slice(start, end).replace(search, replace)
        + innerHTML.slice(end);
    }

    draftQuery.prototype.selection = function (e) {
        // console.log(e);
        if (!window.getSelection().isCollapsed && window.getSelection().type === 'Range') {
            this.elements.addEventListener('keypress' , e => {
                this.turnOffToolbar();
                return this;
            });
            const dom = document.getElementById('toolbar-editor')
            const { top, left , width } = getSelection().getRangeAt(0).getBoundingClientRect()
            CSS = `top : ${top - 60}px; left : ${left + width/2}px; position :absolute; display: grid;`
            dom.style = dom.style.cssText + CSS;

            $('#toolbar-editor button').click( function(e) {
                e.preventDefault();
                let command = $(this).data('command');
                // console.log(command);
                switch (command) {
                    case 'h1':
                        document.execCommand('formatBlock', false, 'h1');
                        break;
                    case 'h2':
                        document.execCommand('formatBlock', false, 'h2');
                        break;
                    case 'bold':
                        document.execCommand('bold');
                        break;
                    case 'italic':
                        document.execCommand('italic');
                        break;
                    case 'strike':
                        document.execCommand('strikethrough');
                        break;
                    case 'inline-code':
                        let string = window.getSelection().toString()
                        // replace = `<code>${string}</code>`,
                        // range = window.getSelection().getRangeAt(0),
                        // start = range.startOffset,
                        // end = range.endOffset,
                        // parentNode = range.commonAncestorContainer.parentNode
                        // parentNode.innerHTML = draftQuery.fn.insertAt(parentNode.innerHTML, string, replace ,start, end);
                        // const parent = window.getSelection().focusNode;
                        document.execCommand("insertHTML", false, '<text>text</text>');
                        let phong = document.createElement('code');
                        phong.innerHTML = string;
                        // if (window.getSelection().focusNode.parentNode.parentNode.nodeName == 'CODE') {
                        //     console.log('test');
                        // }
                        window.getSelection().focusNode.parentNode.replaceWith(phong);
                        // window.getSelection().focusNode.parentNode.childNodes[0].replaceWith(phong);
                        break;
                        // console.log(window.getSelection());
                    case 'link':
                        document.execCommand('createLink', false, 'pre');
                        break;
                    default:
                        break;
                }
            });
        } else {
            this.turnOffToolbar();
        }
        return this;
    }
    window.draftQuery = draftQuery;
    return draftQuery;

})();
