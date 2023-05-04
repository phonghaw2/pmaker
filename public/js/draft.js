
(function () {
    function phongQuery(selector) {
        if (!(this instanceof phongQuery))
            // console.log(selector)
            return new phongQuery(selector)
        if (selector === typeof '') {
            this.elements = document.querySelectorAll(selector) // it 's array element
        }
        else if (selector.nodeName) {
            this.elements = selector

        }
        return this
    }
    phongQuery.fn = phongQuery.prototype

    phongQuery.prototype.each = function (...args) {
        this.elements.forEach(...args)
        return this
    }
    phongQuery.prototype.addClass = function (className) {
        this.each(element => {
            className.split(' ').forEach(oneClass => {
                element.classList.add(oneClass)
            })
        })
        return this
    }

    phongQuery.prototype.addToolbar = function () {
        // document.execCommand()
        let CSS = ``;
        if (window.getSelection() && window.getSelection().hasOwnProperty('getRangeAt')) {
            const { top, left } = getSelection().getRangeAt(0).getBoundingClientRect()
            CSS = `top : ${top}; left : ${left}; position :absolute; `

        }

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
        </div>`;

        this.elements.parentNode.appendChild(parent);
        this.parentDOM = parent;

        this.elements.addEventListener('mouseout' , (e) => {
            console.log('mouseout')
        })
        this.elements.addEventListener('mouseup' , (e) => {
            this.selection();
        })

        this.elements.addEventListener('focus' ,  e => {
            // console.log('focus')
        })
        this.elements.addEventListener('keypress' , e => {
            switch(e.keyCode){
                case 13 :
                    this.turnOffToolbar()
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
    phongQuery.prototype.mouseoutEvent = ()  => {
        const dom = document.getElementById('toolbar-editor')
        // dom.style.display = 'none'

    }

    phongQuery.prototype.turnOffToolbar = function () {
        const dom = document.getElementById('toolbar-editor')
        CSS = `display : none; `
        dom.style = dom.style.cssText + CSS
    }

    phongQuery.prototype.selection = function () {
        if(window.getSelection().type === 'Range'){
            console.log('range')

            const dom = document.getElementById('toolbar-editor')
            const { top, left , width } = getSelection().getRangeAt(0).getBoundingClientRect()
            CSS = `top : ${top - 60}px; left : ${left + width/2}px; position :absolute; display: grid;`
            dom.style = dom.style.cssText + CSS;

            $('#toolbar-editor a').click( function(e) {
                e.preventDefault()
                let command = $(this).data('command');
                console.log(command);
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
                    default:
                        break;
                }
            });
        } else {
            this.turnOffToolbar()
        }
        return this
    }
    window.phongQuery = phongQuery
    return phongQuery;

})();
