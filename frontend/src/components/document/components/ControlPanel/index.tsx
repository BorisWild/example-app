"use client"

import {Button} from "@chakra-ui/button";
import { SmallAddIcon } from "@chakra-ui/icons";
import {texts} from "@/data/texts";

export default function ControlPanel(){

    return (
        <div className={'w-full md:p-5 px-[1rem] pb-5'}>
            <div className={'w-full p-3 bg-neutral-100 border-[1px] rounded-2xl'}>
                <div className={'flex flex-wrap'}>
                    <Button size={'sm'}>{texts.buttons.createNewContract}</Button>
                    <Button size={'sm'}>{texts.buttons.createSingleChapter}</Button>
                    <Button size={'sm'}>{texts.buttons.remakeTheLastAIOutput}</Button>
                    <Button size={'sm'}>{texts.buttons.stopGenerating}</Button>
                </div>
                <div className={'flex flex-wrap'}>
                    <Button size={'sm'}>{texts.buttons.createNextChapter}</Button>
                    <Button size={'sm'}>{texts.buttons.createLastChapter}</Button>
                    <Button size={'sm'}>{texts.buttons.decreaseAmountOfText}</Button>
                    <Button size={'sm'}>{texts.buttons.rephraseSelectedText}</Button>
                    <Button size={'sm'}>{texts.buttons.increaseAmountOfText}</Button>
                </div>
            </div>
        </div>
    )
}
