"use client"

import {Breadcrumb, BreadcrumbItem, BreadcrumbLink} from "@chakra-ui/breadcrumb";
import {
    AddIcon,
    DeleteIcon,
    DownloadIcon, EditIcon,
    ExternalLinkIcon,
    HamburgerIcon,
    InfoOutlineIcon,
    LinkIcon, RepeatIcon
} from "@chakra-ui/icons";
import {Menu, MenuButton, MenuItem, MenuList} from "@chakra-ui/menu";
import {IconButton} from "@chakra-ui/button";
import styles from './index.module.css'
import classNames from "classnames";

export default function HeaderBar(){

    return (

        <div className={'flex justify-between items-center py-3 pl-3 pr-5'}>
            <Breadcrumb fontWeight='medium' fontSize='sm'>
                <BreadcrumbItem>
                    <BreadcrumbLink href='#'>Home</BreadcrumbLink>
                </BreadcrumbItem>
                <BreadcrumbItem>
                    <BreadcrumbLink href='#'>Documents</BreadcrumbLink>
                </BreadcrumbItem>
                <BreadcrumbItem isCurrentPage>
                    <BreadcrumbLink href='#'>Welcome</BreadcrumbLink>
                </BreadcrumbItem>
            </Breadcrumb>
            <div className={'flex items-center'}>
                <Menu>
                    <MenuButton
                        className={ classNames( styles.downloadBtn, 'rounded hover:bg-gray-200 min-h-[1.5rem] w-[1.5rem] border-transparent h-[1.5rem] border-0 p-0' )}
                        style={ { minWidth : '1.5rem!important', width: '1.5rem!important' } }
                        //@ts-ignore
                        as={IconButton}
                        aria-label='Options'
                        icon={<DownloadIcon />}
                        variant='outline'
                    />
                    <MenuList>
                        <MenuItem icon={<AddIcon />} command='⌘T'>
                            Export to .pdf
                        </MenuItem>
                        <MenuItem icon={<ExternalLinkIcon />} command='⌘N'>
                            Export to .docx
                        </MenuItem>
                        {/*<MenuItem icon={<RepeatIcon />} command='⌘⇧N'>*/}
                        {/*    Open Closed Tab*/}
                        {/*</MenuItem>*/}
                        {/*<MenuItem icon={<EditIcon />} command='⌘O'>*/}
                        {/*    Open File...*/}
                        {/*</MenuItem>*/}
                    </MenuList>
                </Menu>

                <div className={'flex items-center justify-center cursor-pointer transition-[2s] rounded hover:bg-gray-200 ml-2 w-[1.5rem] h-[1.5rem]'}>
                    <InfoOutlineIcon />
                </div>
                <div className={'flex items-center justify-center cursor-pointer transition-[2s] rounded hover:bg-gray-200 ml-2 w-[1.5rem] h-[1.5rem]'}>
                    <LinkIcon />
                </div>
                <div className={'flex items-center justify-center cursor-pointer transition-[2s] rounded hover:bg-gray-200 ml-2 w-[1.5rem] h-[1.5rem]'}>
                    <DeleteIcon />
                </div>
            </div>
        </div>

    )

}