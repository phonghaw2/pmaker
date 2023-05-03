
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
        let CSS = `border: 1px solid #AAA;
            background: #FFF;
            font-family: 'Candal';
            border-radius: 1px;
            color: black;
            padding: 5px;
            display : inline-block;
            margin: -2px;
            margin-top: 10px;
            text-decoration: none;
            box-shadow: 0px 1px 0px #CCC;
            transform: translateX(-50%);
            transition: 1s;

            `
        if (window.getSelection() && window.getSelection().hasOwnProperty('getRangeAt')) {
            const { top, left } = getSelection().getRangeAt(0).getBoundingClientRect()
            CSS = `top : ${top}; left : ${left}; position :absolute; `

        }

        if (this.CSS) {
            CSS += this.CSS
        }

        //   console.log(this.elements)
        let parent = document.createElement('div');
        parent.innerHTML = `<div id ="toolbar-editor"  style="${CSS}">
        <a href=“#” data-command='bold'><i class='fa fa-bold'></i></a>
        <a href=“#” data-command='italic'><i class='fa fa-italic'></i></a>
        <a href=“#” data-command='underline'><i class='fa fa-underline'></i></a>
        <a href=“#” data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
        <a href=“#” data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
        <a href=“#” data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
        <a href=“#” data-command='justifyRight'><i class='fa fa-align-right'></i></a>
        <a href=“#” data-command='h1'>H1</a>
        <a href=“#” data-command='h2'>H2</a>
        <a href=“#” data-command='createlink'><i class='fa fa-link'></i></a>
        <a href=“#” data-command='unlink'><i class='fa fa-unlink'></i></a>
        <a href=“#” data-command='insertimage'><i class='fa fa-image'></i></a>
        </div>`;

        this.elements.parentNode.appendChild(parent);
        this.parentDOM = parent;
        // console.log('sacasc' , phongQuery.elements)
        this.elements.addEventListener('mouseup' , (e) => {
            this.selection();
    })
    this.elements.addEventListener('focus' ,  e => {
        console.log('focus')
    })
    // this.elements.addEventListener('keypress' , e => {
    //     // console.log(keyCode)
    //     switch(e.keyCode){
    //         case 13 : document.createTextNode('sabcjahsbc');
    //         e.stopPropagation();
    //         e.preventDefault();
    //             console.log('enter')
    //             if(getSelection()  && getSelection().rangeCount){
    //                 const dom = document.createElement('span')
    //                 dom.innerHTML = "nguyen minh duc"
    //                 const selection = getSelection() , range = getSelection().getRangeAt(0)
	// 				const br = document.createElement('br')
	// 				range.insertNode(br)
    //                 range.setStartAfter(br)
    //                 range.collapse(true)

    //                 range.removeAllRanges()
    //                 selection.addRange(range)
    //                 range.collapse(true)
    //                 break;

    //             }
    //     }
    // })
        return this
    };
    phongQuery.prototype.mouseoutEvent = ()  => {
        const dom = document.getElementById('toolbar-editor')
        // dom.style.display = 'none'
    }

    phongQuery.prototype.selection = function () {
        if(window.getSelection().type === 'Range'){
            // phongQuery(dom).addToolbar();
            const dom = document.getElementById('toolbar-editor')
            const { top, left , width } = getSelection().getRangeAt(0).getBoundingClientRect()
            CSS = `top : ${top - 60}px; left : ${left + width/2}px; position :absolute;display : inline-block;`
            dom.style = dom.style.cssText + CSS;

            const arrayButton = dom.getElementsByTagName("a")
            for (let i = 0 ; i < arrayButton.length; i++) {
                arrayButton[i].addEventListener("click",function (e) {
                    e.preventDefault()
                    console.log('check data command',arrayButton[i].getAttribute('data-command'))
                    const command = arrayButton[i].getAttribute('data-command')
                    document.execCommand("styleWithCSS",true );
                    if (command == 'h1' || command == 'h2') {
                        document.execCommand('formatBlock', false, command);
                        document.execCommand('formatBlock ' , false , 'h2')
                    }
                    // if(comm)
                })
            }

            return this
        } else {
            const dom = document.getElementById('toolbar-editor')
            CSS = `display : none; `
            dom.style = dom.style.cssText + CSS
        }
    }
    window.phongQuery = phongQuery
    return phongQuery;

})();
