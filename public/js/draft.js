
(function () {
    var H1_SVG = `<svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.00023 5L4 17M13 5L12.9998 17M4 11H12.9998M19.875 19V10L17.625 12.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;
    var H2_SVG = `<svg fill="none" xmlns="http://www.w3.org/2000/svg" class="css-9v3hhm" viewBox="0 0 24 24"><path d="M3.37402 5V17M12.374 5V17M3.37402 11H12.374M16.302 11.373C16.5035 10.8941 16.8644 10.4997 17.3236 10.2566C17.7829 10.0136 18.312 9.93705 18.8213 10.0399C19.3306 10.1427 19.7886 10.4186 20.1175 10.8207C20.4465 11.2229 20.6262 11.7265 20.626 12.246C20.628 12.694 20.494 13.132 20.242 13.503L16.123 19H20.626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;
    var H3_SVG = `<svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.375 5V17M12.375 5V17M3.375 11H12.375M16.125 10H20.625L18 13.75C18.4317 13.7499 18.8568 13.8564 19.2375 14.0598C19.6183 14.2633 19.943 14.5575 20.1828 14.9165C20.4227 15.2754 20.5703 15.688 20.6127 16.1176C20.655 16.5472 20.5907 16.9807 20.4255 17.3795C20.2603 17.7783 19.9993 18.1303 19.6656 18.4042C19.3319 18.678 18.9358 18.8654 18.5123 18.9496C18.0889 19.0338 17.6513 19.0123 17.2382 18.8869C16.8251 18.7616 16.4492 18.5363 16.144 18.231" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;
    var BOLD_SVG = `<svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.8571 12C13.918 12 14.9354 11.5786 15.6856 10.8284C16.4357 10.0783 16.8571 9.06087 16.8571 8C16.8571 6.93913 16.4357 5.92172 15.6856 5.17157C14.9354 4.42143 13.918 4 12.8571 4H6V12M12.8571 12H6M12.8571 12H14C15.0609 12 16.0783 12.4214 16.8284 13.1716C17.5786 13.9217 18 14.9391 18 16C18 17.0609 17.5786 18.0783 16.8284 18.8284C16.0783 19.5786 15.0609 20 14 20H6V12" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;
    var ITALIC_SVG =`<svg fill="none" xmlns="http://www.w3.org/2000/svg" class="css-9v3hhm" viewBox="0 0 24 24"><path d="M10.8571 4H17.7142M6.28564 20H13.1428M14.2856 4L9.71422 20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;
    var STRIKE_SVG = `<svg fill="none" xmlns="http://www.w3.org/2000/svg" class="css-119rivw" viewBox="0 0 24 24"><path d="M11.0121 12H12.9874C15.1693 12 16.938 13.7909 16.938 16C16.938 18.2091 15.1693 20 12.9874 20H11.0121C8.83024 20 7.06149 18.2091 7.06149 16M16.938 8C16.938 5.79086 15.1693 4 12.9874 4H11.0121C8.83024 4 7.06149 5.79086 7.06149 8C7.06149 8.3453 7.1047 8.68038 7.18595 9M4 12H20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;
    var INLINE_SVG = `<svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 16.5L21 12L16.5 7.50002M7.5 7.50002L3 12L7.5 16.5M13.8 3.90002L10.2 20.1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;
    var LINK_SVG = `<svg class="css-9v3hhm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.1898 12.9051C10.5785 13.4247 11.0744 13.8547 11.6439 14.1659C12.2134 14.477 12.8431 14.662 13.4904 14.7084C14.1377 14.7547 14.7874 14.6613 15.3954 14.4345C16.0034 14.2077 16.5555 13.8528 17.0143 13.3938L19.7296 10.6785C20.554 9.825 21.0101 8.68183 20.9998 7.49525C20.9895 6.30867 20.5136 5.17361 19.6745 4.33453C18.8354 3.49546 17.7004 3.01952 16.5138 3.0092C15.3272 2.99889 14.184 3.45504 13.3305 4.27941L11.7737 5.82714M13.8102 11.0949C13.4215 10.5752 12.9256 10.1452 12.3561 9.83411C11.7866 9.52297 11.1569 9.33795 10.5096 9.2916C9.86232 9.24524 9.21264 9.33863 8.60462 9.56544C7.99661 9.79224 7.44449 10.1472 6.9857 10.6061L4.27037 13.3214C3.44601 14.175 2.98986 15.3181 3.00017 16.5047C3.01048 17.6913 3.48643 18.8264 4.3255 19.6654C5.16457 20.5045 6.29964 20.9804 7.48622 20.9908C8.6728 21.0011 9.81596 20.5449 10.6695 19.7206L12.2172 18.1728" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>`;

    var CONTAINER_ID = 'toolbar-editor'
    function draftQuery(selector) {
        if (!(this instanceof draftQuery))
            return new draftQuery(selector)
        if (selector === typeof '') {
            this.elements = document.querySelectorAll(selector) // it 's array element
        }
        else if (selector.nodeName) {<svg fill="none" xmlns="http://www.w3.org/2000/svg" class="css-9v3hhm" viewBox="0 0 24 24"><path d="M10.8571 4H17.7142M6.28564 20H13.1428M14.2856 4L9.71422 20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            this.elements = selector

        }
        return this
    }
    draftQuery.fn = draftQuery.prototype

    draftQuery.prototype.addToolbar = function () {

        let parent = document.createElement('div');
        parent.id = CONTAINER_ID
        parent.setAttribute("style", "");
        this.elements.parentNode.appendChild(parent);
        // this.parentDOM = parent;
        // this.elements.addEventListener('DOMContentLoaded' , (e) => {

        //     this.selection()
        // })
        this.elements.addEventListener('mouseup' , (e) => {
            console.log('mouseup');
            this.selection();
            e.stopPropagation();
            event.stopPropagation();
        })
        // this.selection();

        this.elements.addEventListener('click' ,  e => {
            console.log('click')
        })
        this.elements.addEventListener('message' ,  e => {
            console.log('message')
        })

        this.elements.addEventListener('keypress' , e => {
            if (e.keyCode == 13) {
                this.turnOffToolbar();
            }
        })
        return this
    };
    draftQuery.prototype.mouseoutEvent = ()  => {
        const dom = document.getElementById(CONTAINER_ID)
        // dom.style.display = 'none'

    }

    draftQuery.prototype.turnOffToolbar = function () {
        const dom = document.getElementById(CONTAINER_ID)
        CSS = `display : none; `
        dom.style = dom.style.cssText + CSS
    }

    draftQuery.prototype.renderToolbar = function () {
        let innerHTML = `
        <button type="button" data-command='h1' class='css-1pulk9m'>${H1_SVG}</button>
        <button type="button" data-command='h2' class='css-1pulk9m'>${H2_SVG}</button>
        <button type="button" data-command='h3' class='css-1pulk9m'>${H3_SVG}</button>
        <div data-orientation="vertical" aria-orientation="vertical" role="separator" class="css-picdfb"></div>
        <button type="button" data-command='bold' class='css-1pulk9m'>${BOLD_SVG}</button>
        <button type="button" data-command='italic' class='css-1pulk9m'>${ITALIC_SVG}</button>
        <button type="button" data-command='strike' class='css-1pulk9m'>${STRIKE_SVG}</button>
        <button type="button" data-command='inline-code' class='css-1pulk9m'>${INLINE_SVG}</button>
        <button type="button" data-command='link' class='css-1pulk9m'>${LINK_SVG}</button>`;
        return innerHTML;
    }

    draftQuery.prototype.renderLinkTool = function () {
        let innerHTML = `
        <button type="button" data-command="open link" class="css-1pulk9m">
            <svg class="css-104epv6" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path></svg>
        </button>
        <button type="button" data-command="edit link" class="css-1pulk9m">
            <svg class="css-104epv6" viewBox="0 0 512 512"><path fill="currentColor" d="m493.2 56.26-37.51-37.51C443.2 6.252 426.8 0 410.5 0c-16.38 0-32.76 6.25-45.26 18.75L45.11 338.9a63.91 63.91 0 0 0-17.18 31.21L.32 492.91C-1.7 502.1 6.158 512 15.95 512a16.26 16.26 0 0 0 3.198-.32s84.61-17.95 122.8-26.93c11.54-2.717 21.87-8.523 30.25-16.9l321.2-321.2C518.3 121.7 518.2 81.26 493.2 56.26zM149.5 445.2c-4.219 4.219-9.252 7.039-14.96 8.383-24.68 5.811-69.64 15.55-97.46 21.52l22.04-98.01a31.942 31.942 0 0 1 8.594-15.6l247.6-247.6 82.76 82.76L149.5 445.2zM470.7 124l-50.03 50.02-82.76-82.76 49.93-49.93c6.06-6 14.06-9.33 22.66-9.33s16.58 3.33 22.63 9.375l37.51 37.51C483.1 91.37 483.1 111.6 470.7 124z"></path></svg>
        </button>
        <button type="button" data-command="unlink" class="css-1pulk9m">
            <svg class="css-104epv6" viewBox="0 0 640 512"><path d="M633.9 483.4c7 5.5 8.1 14.7 2.7 22.5-5.5 7-15.6 8.1-22.5 2.7L6.086 28.56C-.849 23.08-2.033 13.02 3.443 6.086 8.918-.849 18.98-2.033 25.91 3.443L633.9 483.4zM591.5 256l-74.2 74.2-25.3-19.9 76.9-76.9c37.5-37.5 37.5-98.3 0-135.79-37.5-37.49-98.3-37.49-135.8 0l-22.6 22.59c-6.2 6.3-16.4 6.3-22.6 0-6.3-7.1-6.3-16.3 0-22.59l22.6-22.63c50-49.99 131-49.99 181 0 50 49.12 50 131.02 0 181.02zM286.2 380.6c-27.1-27.1-39.6-63.5-37.2-99.1l33.4 26.3c3.4 18.4 12.2 36 26.4 50.1 19.9 19.9 46.4 29.3 72.4 28l33.4 26.3c-43.9 13.7-93.7 3.1-128.4-31.6zm-27.4-254.5-33.4-26.34c43.9-13.64 93.7-3.07 128.4 31.64 27.1 27.1 39.6 63.5 36.3 99.1l-32.5-26.3c-3.4-18.4-12.2-36-26.4-50.1-19.9-19.9-46.4-29.3-72.4-28zM71.1 278.6c-37.49 37.5-37.49 98.3 0 135.8 37.5 37.5 98.3 37.5 135.8 0l22.6-22.6c6.2-6.3 16.4-6.3 22.6 0 6.3 6.2 6.3 16.3 0 22.6L229.5 437c-50 50-131.04 50-181.03 0-49.988-50-49.988-131.9 0-181l74.23-74.2 24.4 19.9-76 76.9z"></path></svg>
        </button>`;
        return innerHTML;
    }

    draftQuery.prototype.renderSettingLinkModal = function () {
        let innerHTML = `
        <div class="css-19tico8">
            <div class="css-1vtvl2a">
                <div class="css-tq074a">
                    <span class="css-ldov21">
                        <svg class="css-2iqbi4" viewBox="0 0 512 512"><path d="M301.148 394.702l-79.2 79.19c-50.778 50.799-133.037 50.824-183.84 0-50.799-50.778-50.824-133.037 0-183.84l79.19-79.2a132.833 132.833 0 013.532-3.403c7.55-7.005 19.795-2.004 20.208 8.286.193 4.807.598 9.607 1.216 14.384.481 3.717-.746 7.447-3.397 10.096-16.48 16.469-75.142 75.128-75.3 75.286-36.738 36.759-36.731 96.188 0 132.94 36.759 36.738 96.188 36.731 132.94 0l79.2-79.2.36-.36c36.301-36.672 36.14-96.07-.37-132.58-8.214-8.214-17.577-14.58-27.585-19.109-4.566-2.066-7.426-6.667-7.134-11.67a62.197 62.197 0 012.826-15.259c2.103-6.601 9.531-9.961 15.919-7.28 15.073 6.324 29.187 15.62 41.435 27.868 50.688 50.689 50.679 133.17 0 183.851zm-90.296-93.554c12.248 12.248 26.362 21.544 41.435 27.868 6.388 2.68 13.816-.68 15.919-7.28a62.197 62.197 0 002.826-15.259c.292-5.003-2.569-9.604-7.134-11.67-10.008-4.528-19.371-10.894-27.585-19.109-36.51-36.51-36.671-95.908-.37-132.58l.36-.36 79.2-79.2c36.752-36.731 96.181-36.738 132.94 0 36.731 36.752 36.738 96.181 0 132.94-.157.157-58.819 58.817-75.3 75.286-2.651 2.65-3.878 6.379-3.397 10.096a163.156 163.156 0 011.216 14.384c.413 10.291 12.659 15.291 20.208 8.286a131.324 131.324 0 003.532-3.403l79.19-79.2c50.824-50.803 50.799-133.062 0-183.84-50.802-50.824-133.062-50.799-183.84 0l-79.2 79.19c-50.679 50.682-50.688 133.163 0 183.851z"></path></svg>
                        <span>Hyperlink the text</span>
                    </span>
                    <button type="button" data-testid="Close" variant="transparent" data-state="closed" class="css-1pulk9m">
                        <svg class="css-3jrieu" viewBox="0 0 320 512"><path d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg>
                    </button>
                </div>
            </div>
            <div class="css-uyotl1">
                <form>
                    <div class="css-1gok8e8">
                        <label for="link" class="css-1jk3l06">Anchor text</label>
                        <input autocomplete="off" id="link" placeholder="Write Something Here" type="text" class="css-17348h7" value="">
                    </div>
                    <div class="css-1gok8e8">
                        <label for="link" class="css-1jk3l06">Link</label>
                        <input autocomplete="off" id="link" placeholder="https://..." type="text" class="css-17348h7" value="">
                    </div>
                    <div class="css-penffn">
                        <button type="submit" variant="primary" class="css-1nl4mik">
                            <span>Insert Link</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>`;
        return innerHTML;
    }

    draftQuery.prototype.insertAt = function (innerHTML, search, replace, start, end) {
        return innerHTML.slice(0, start)
    	+ innerHTML.slice(start, end).replace(search, replace)
        + innerHTML.slice(end);
    }

    draftQuery.prototype.selection = function () {
        // console.log(e);
        if (!window.getSelection().isCollapsed && window.getSelection().type === 'Range') {
            this.elements.addEventListener('keypress' , e => {
                this.turnOffToolbar();
                return this;
            });

            const { top, left , width } = getSelection().getRangeAt(0).getBoundingClientRect()
            CSS = `top : ${top - 50}px; left : ${left + width/2}px; position :absolute; display: grid;`
            let dom = document.getElementById('toolbar-editor');
            let innerHTMl;
            if (window.getSelection().anchorNode.parentNode.nodeName == 'A') {
                innerHTML = this.renderLinkTool()
            } else {
                innerHTML = this.renderToolbar()
            }
            dom.innerHTML = innerHTML;
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
                        console.log('bold');
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

                        // if (window.getSelection().focusNode.parentNode.parentNode.nodeName == 'CODE') {
                        //     console.log('test');
                        // }
                        const selParent = window.getSelection().focusNode.parentNode
                        if (!selParent.nextSibling) {
                            let phong = document.createElement('code');
                            phong.innerHTML = string;
                            window.getSelection().focusNode.parentNode.replaceWith(phong);
                            break;
                        }
                        switch (selParent) {
                            case selParent.nextSibling.parentNode.nodeName == 'CODE' && selParent.previousSibling.parentNode.nodeName == 'CODE':

                                break;
                            case selParent.parentNode.nodeName == 'CODE':

                                break;
                            case selParent.parentNode.nodeName == 'CODE':

                                break;

                            default:
                                break;
                        }
                        // if (selParent) {
                        //     if (selParent.parentNode.nodeName == 'CODE') {
                        //         window.getSelection().focusNode.parentNode.nextSibling.insertData(0, string);
                        //         window.getSelection().focusNode.remove();
                        //     } else {
                        //         let phong = document.createElement('code');
                        //         phong.innerHTML = string;
                        //         window.getSelection().focusNode.parentNode.replaceWith(phong);
                        //     }
                        // }  else {
                        //     let phong = document.createElement('code');
                        //     phong.innerHTML = string;
                        //     window.getSelection().focusNode.parentNode.replaceWith(phong);
                        // }
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
