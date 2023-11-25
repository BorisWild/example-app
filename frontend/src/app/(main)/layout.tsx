import MainTemplate from "@/components/layouts/templates/main";

export default function MainLayout( {children}: {children: React.ReactNode} ){
    return (
        <MainTemplate>{children}</MainTemplate>
    )
}