"use client"

import 'dotenv/config'
import { useRef } from "react";
import { Editor } from '@tinymce/tinymce-react'

export default function DocumentEditor(){

    const tinyEditor = useRef()

    return (
        <div className={'flex-1 h-full md:px-[3rem] px-[1rem] md:py-[2rem] py-5'}>
            <div className={'text-6xl mb-5'}>
                👋
            </div>
            <h1 className={'font-bold text-4xl mb-2'}>Welcome to Lawyer GPT!</h1>
            <p>Try generating text from Chat PT for your legal document.</p>
            <div className={'mt-3'}>
               <Editor
                   apiKey={ process.env.NEXT_PUBLIC_API_KEY_TINYMCE }
                   //@ts-ignore
                   onInit={ (evt, editor) => tinyEditor.current = editor } />
            </div>
        </div>
    )

}
