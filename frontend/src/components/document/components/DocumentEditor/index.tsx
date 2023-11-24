"use client"
//@ts-ignore
//import { Editor } from "react-draft-wysiwyg";
//@ts-ignore
//import { EditorState } from 'draft-js';
import {useState} from "react";
//import 'react-draft-wysiwyg/dist/react-draft-wysiwyg.css';

export default function DocumentEditor(){

    //const [ editorState, setEditorState ] = useState( () => EditorState.createEmpty() );

    return (
        <div className={'flex-1 h-full px-[3rem] py-[2rem]'}>
            <div className={'text-6xl mb-5'}>
                👋
            </div>
            <h1 className={'font-bold text-4xl mb-2'}>Welcome to Lawyer GPT!</h1>
            <p>Try generating text from Chat PT for your legal document.</p>
            <div className={'mt-3'}>
               <textarea />
                // <Editor
               //     editorState={editorState}
               //     wrapperClassName="demo-wrapper"
               //     editorClassName="demo-editor"
               //     onEditorStateChange={setEditorState}
               // />
            </div>
        </div>
    )

}
